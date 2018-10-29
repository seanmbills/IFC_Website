<?php
/**
 * Spammer Log page template
 *
 * Outputs the Spammer Log admin page HTML.
 *
 * @package WordPress Zero Spam
 * @subpackage ZeroSpam_Plugin
 * @since 1.5.0
 */

/**
 * Security Note: Blocks direct access to the plugin PHP files.
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
?>
<div class="zero-spam__row">
  <div class="zero-spam__cell">
    <div class="zero-spam__widget zero-spam__bg--primary">
      <div class="zero-spam__inner">
        <h3><?php echo __( 'Summary', 'zerospam' ); ?></h3>
        <div class="zero-spam__row">
          <?php if ( isset( $num_days ) ): ?>
            <div class="zero-spam__stat">
              <?php echo __( 'Protected', 'zerospam' ); ?>
              <b><?php echo number_format( $num_days, 0 ); ?> <?php echo __( 'days', 'zerospam' ); ?></b>
            </div>
          <?php endif; ?>
            <div class="zero-spam__stat">
              <?php echo __( 'Total Spam', 'zerospam' ); ?>
              <b><?php echo number_format( $all_spam['raw'], 0 ); ?></b>
            </div>
          <?php if ( isset( $per_day ) ): ?>
            <div class="zero-spam__stat">
              <?php echo __( 'Per day', 'zerospam' ); ?>
              <b><?php echo number_format( $per_day, 0 ); ?></b>
            </div>
          <?php endif; ?>
          <?php if ( count( $all_spam['unique_spammers'] ) ): ?>
            <div class="zero-spam__stat">
              <?php echo __( 'Unique Spammers', 'zerospam' ); ?>
              <b><?php echo number_format( $all_spam['unique_spammers'], 0 ); ?></b>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="zero-spam__cell">
    <div class="zero-spam__widget zero-spam__bg--secondary">
      <div class="zero-spam__inner">
        <h3><?php echo __( 'Stats', 'zerospam' ); ?></h3>
        <div class="zero-spam__row">
          <div class="zero-spam__stat">
            <?php echo __( 'Comments', 'zerospam' ); ?>
            <b><?php echo number_format( $all_spam['comment_spam'], 0 ); ?></b>
          </div>
          <div class="zero-spam__stat">
            <?php echo __( 'Registrations', 'zerospam' ); ?>
            <b><?php echo number_format( $all_spam['registration_spam'], 0 ); ?></b>
          </div>

          <?php if (
            zerospam_plugin_check( 'cf7' ) &&
            ! empty( $this->settings['cf7_support'] ) && $this->settings['cf7_support']
          ): ?>
          <div class="zero-spam__stat">
            <?php echo __( 'Contact Form 7', 'zerospam' ); ?>
            <b><?php echo number_format( $all_spam['cf7_spam'], 0 ); ?></b>
          </div>
          <?php endif; ?>

          <?php if (
            zerospam_plugin_check( 'gf' ) &&
            ! empty( $this->settings['gf_support'] ) && $this->settings['gf_support']
          ): ?>
          <div class="zero-spam__stat">
            <?php echo __( 'Gravity Forms', 'zerospam' ); ?>
            <b><?php echo number_format( $all_spam['gf_spam'], 0 ); ?></b>
          </div>
          <?php endif; ?>

          <?php if (
            zerospam_plugin_check( 'bp' ) &&
            ! empty( $this->settings['bp_support'] ) && $this->settings['bp_support']
          ): ?>
          <div class="zero-spam__stat">
            <?php echo __( 'BP Registrations', 'zerospam' ); ?>
            <b><?php echo number_format( $all_spam['bp_registration_spam'], 0 ); ?></b>
          </div>
          <?php endif; ?>

          <?php if (
            zerospam_plugin_check( 'nf' ) &&
            ! empty( $this->settings['nf_support'] ) && $this->settings['nf_support']
          ): ?>
          <div class="zero-spam__stat">
            <?php echo __( 'Ninja Forms', 'zerospam' ); ?>
            <b><?php echo number_format( $all_spam['nf_spam'], 0 ); ?></b>
          </div>
          <?php endif; ?>

          <?php if (
            zerospam_plugin_check( 'wpf' ) &&
            ! empty( $this->settings['wpf'] ) && $this->settings['wpf_support']
          ): ?>
          <div class="zero-spam__stat">
            <?php echo __( 'WPForms', 'zerospam' ); ?>
            <b><?php echo number_format( $all_spam['wpf_spam'], 0 ); ?></b>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if ( $ip_location_support ): ?>
<div class="zero-spam__widget">
  <div class="zero-spam__overlay">
    <div class="zero-spam__inner">
      <i class="fa fa-circle-o-notch fa-spin"></i>
      <h4><?php echo __( 'Crunching numbers...', 'zerospam' ); ?></h4>
      <p><?php echo __( 'This could take a minute or two, please be patient.' ); ?></p>
    </div>
  </div>
  <div class="zero-spam__row">
    <div class="zero-spam__cell">
      <div class="zero-spam__inner">
        <h3><?php echo __( 'Most Spam By Country', 'zerospam' ); ?></h3>
        <table class="zero-spam__table">
          <thead>
            <tr>
              <th><?php echo __( 'Country', 'zerospam' ); ?></th>
              <th class="zero-spam__text-right"><?php echo __( 'Count', 'zerospam' ); ?></th>
            </tr>
          </thead>
          <tbody id="zerospam-country-spam">
          </tbody>
        </table>
      </div>
    </div>
    <div class="zero-spam__cell">
      <div id="map" class="zero-spam__map"></div>
      <script>
      ( function( $ ) {
        $( function() {
          $.post( ajaxurl, {
            action: 'get_ip_spam',
            security: '<?php echo $ajax_nonce; ?>',
          }, function( data ) {console.log(data);
            if ( data ) {
              var obj         = jQuery.parseJSON( data ),
                country_count = {},
                cnt           = 0;

              if ( obj.by_country ) {
                $( ".zero-spam__overlay" ).fadeOut();


                $.each( obj.by_country, function( abbr, c ) {
                  cnt++;
                  if ( cnt > 6 ) return false;
                  $( "#zerospam-country-spam" ).append( "<tr><td><b>" + c.name + "</b></td><td class='zero-spam__text-right'>" + c.count + "</td></tr>" );
                  country_count[abbr] = String(c.count);
                });

                $( '#map' ).vectorMap({
                    map: 'world_mill_en',
                    backgroundColor: '#1b1e24',
                  series: {
                    regions: [{
                      scale: ['#ffe6ea', '#ff183a'],
                      normalizeFunction: 'linear',
                      attribute: 'fill',
                      values: country_count
                    }]
                  }

                });

                var map = $( '#map' ).vectorMap('get', 'mapObject');
                map.series.regions[0].setValues( country_count );
              } else {
                $( ".zero-spam__inner", $( ".zero-spam__overlay" ) ).html( "<i class='fa fa-thumbs-up'></i><h4>No spammers yet!</h4>" );
              }
            } else {
              $( ".zero-spam__inner", $( ".zero-spam__overlay" ) ).html( "<i class='fa fa-exclamation-triangle'></i><h4>IP API Usage Limit Reached</h4><p>You've reached you're daily  limit to the IP API to gather location information. Please check back in one hour.</p>" );
            }
          });
        });
      })( jQuery );
      </script>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if ( $all_spam['raw'] ): ?>
<div class="zero-spam__row">
  <div class="zero-spam__cell">
    <div class="zero-spam__widget">
      <div class="zero-spam__inner">
        <div class="zero-spam__row">
          <div class="zero-spam__cell">
            <h3><?php echo __( 'Percentage of Spam by Day', 'zerospam' ); ?></h3>
            <table class="zero-spam__table">
              <thead>
                <tr>
                  <th><?php echo __( 'Day', 'zerospam' ); ?></th>
                  <th class="zero-spam__text-right"><?php echo __( 'Count', 'zerospam' ); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach( $all_spam['by_day'] as $day => $count ): ?>
                <tr>
                  <td><b><?php echo $day; ?></b></td>
                  <td class="zero-spam__text-right"><?php echo number_format( $count, 0 ); ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="zero-spam__cell">
            <div id="donut"></div>
            <script>
            jQuery(function() {
              Morris.Donut({
                element: 'donut',
                data: [
                  <?php foreach( $all_spam['by_day'] as $day => $count ): ?>
                  {value: <?php echo zerospam_get_percent( $count, $all_spam['raw'] ); ?>, label: '<?php echo $day; ?>', formatted: '<?php echo zerospam_get_percent( $count, $all_spam['raw'] ); ?>%'},
                  <?php endforeach; ?>
                ],
                formatter: function (x, data) { return data.formatted; }
              });
            });
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="zero-spam__cell">
    <div class="zero-spam__widget">
      <div class="zero-spam__inner">
        <h3><?php echo __( 'Most Frequent Spammers', 'zerospam' ); ?></h3>
        <table class="zero-spam__table">
          <thead>
            <tr>
              <th width="100"><?php echo __( 'IP', 'zerospam' ); ?></th>
              <?php if ( $ip_location_support ): ?><th><?php echo __( 'Location', 'zerospam' ); ?></th><?php endif; ?>
              <th class="zero-spam__text-right">#</th>
              <th><?php echo __( 'Status', 'zerospam' ); ?></th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <?php
            arsort( $all_spam['by_spam_count'] );
            $cnt = 0;

            foreach( $all_spam['by_spam_count'] as $ip => $count ):
              $cnt++; if ( $cnt > 6) break;
              ?>
              <tr data-ip="<?php echo $ip; ?>">
                <td><a href="http://ip-lookup.net/index.php?ip=<?php echo $ip; ?>" target="_blank">
              <?php echo $ip; ?> <i class="fa fa-external-link-square"></i></a></td>
                <?php if ( $ip_location_support ): ?>
                <td>
                  <div data-ip-location="<?php echo $ip; ?>"><i class="fa fa-search"></i></div>
                </td>
                <?php endif; ?>
                <td class="zero-spam__text-right"><?php echo number_format( $count, 0 ); ?></td>
                <td class="zero-spam__status">
                  <?php if( zerospam_is_blocked( $ip ) ): ?>
                  <span class="zero-spam__label zero-spam__bg--primary"><?php echo __( 'Blocked', 'zerospam' ); ?></span>
                  <?php else: ?>
                  <span class="zero-spam__label zero-spam__bg--trinary"><?php echo __( 'Unblocked', 'zerospam' ); ?></span>
                  <?php endif; ?>
                </td>
                <td class="zero-spam__text-center">
                  <i class="fa fa-circle-o-notch fa-spin"></i>
                  <i class="fa fa-edit"></i>
                  <a href="#" class="button button-small zero-spam__block-ip"
                    data-ip="<?php echo $ip; ?>"><i class="fa fa-gear"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="zero-spam__widget">
  <div class="zero-spam__inner">
    <?php if ( count( $all_spam['by_date'] ) ): ?>
    <a href="javascript: clearLog();" class="zero-spam__fright button"><?php echo __( 'Reset Log', 'zerospam' ); ?></a>
      <h3><?php echo __( 'All Time', 'zerospam' ); ?></h3>
    <div id="graph"></div>
    <script>
    jQuery(function() {
      // Use Morris.Area instead of Morris.Line
      Morris.Area({
        element: 'graph',
        behaveLikeLine: true,
        data: [
          <?php foreach( $all_spam['by_date'] as $date => $ary ): ?>
          {
            'date': '<?php echo $date; ?>',
            <?php foreach ( $ary as $key => $val ):
              switch ( $key ):
                case 'comment_spam': ?>
                  'spam_comments' : <?php echo $val; ?>,
                  <?php break;
                case 'registration_spam': ?>
                  'spam_registrations' : <?php echo $val; ?>,
                  <?php break;
                case 'cf7_spam':
                  if ( zerospam_plugin_check( 'cf7' ) && ! empty( $this->settings['cf7_support'] ) && $this->settings['cf7_support'] ): ?>
                  'spam_cf7' : <?php echo $val; ?>,
                  <?php endif; break;
                case 'gf_spam':
                 if ( zerospam_plugin_check( 'gf' ) && ! empty( $this->settings['gf_support'] ) && $this->settings['gf_support'] ): ?>
                  'spam_gf' : <?php echo $val; ?>,
                  <?php endif; break;
                case 'bp_registration_spam':
                  if ( zerospam_plugin_check( 'bp' ) && ! empty( $this->settings['bp_support'] ) && $this->settings['bp_support'] ): ?>
                  'bp_registrations' : <?php echo $val; ?>,
                  <?php endif; break;
                case 'nf_spam':
                  if ( zerospam_plugin_check( 'nf' ) && ! empty( $this->settings['nf_support'] ) && $this->settings['nf_support'] ): ?>
                  'nf_spam' : <?php echo $val; ?>,
                  <?php endif; break;
                case 'wpf_spam':
                  if ( zerospam_plugin_check( 'wpf' ) && ! empty( $this->settings['wpf_support'] ) && $this->settings['wpf_support'] ): ?>
                  'wpf_spam' : <?php echo $val; ?>,
                  <?php endif; break;
                default: if ( $key != 'data' ): ?>
                  '<?php echo $key; ?>': <?php echo $val; ?>,
              <?php endif; endswitch;
            endforeach; ?>
          },
          <?php endforeach; ?>
        ],
        xkey: 'date',
        ykeys: [
          <?php foreach ( $ary as $key => $val ):
              switch ( $key ):
                case 'comment_spam': ?>
                  'spam_comments',
                  <?php break;
                case 'registration_spam': ?>
                  'spam_registrations',
                  <?php break;
                case 'cf7_spam': if ( zerospam_plugin_check( 'cf7' ) && ! empty( $this->settings['cf7_support'] ) && $this->settings['cf7_support'] ): ?>
                  'spam_cf7',
                  <?php endif; break;
                case 'gf_spam': if ( zerospam_plugin_check( 'gf' ) && ! empty( $this->settings['gf_support'] ) && $this->settings['gf_support'] ): ?>
                  'spam_gf',
                  <?php endif; break;
                case 'bp_registration_spam': if ( zerospam_plugin_check( 'bp' ) && ! empty( $this->settings['bp_support'] ) && $this->settings['bp_support'] ): ?>
                  'bp_registrations',
                  <?php endif; break;
                case 'nf_spam': if ( zerospam_plugin_check( 'nf' ) && ! empty( $this->settings['nf_support'] ) && $this->settings['nf_support'] ): ?>
                  'nf_spam',
                  <?php endif; break;
                case 'wpf_spam': if ( zerospam_plugin_check( 'wpf' ) && ! empty( $this->settings['wpf_support'] ) && $this->settings['wpf_support'] ): ?>
                  'wpf_spam',
                  <?php endif; break;
                default: if ( $key != 'data' ): ?>
                  '<?php echo $key; ?>',
              <?php endif; endswitch;
            endforeach; ?>
        ],
        labels: [
          <?php foreach ( $ary as $key => $val ):
              switch ( $key ):
                case 'comment_spam': ?>
                  '<?php echo __( 'Spam Comments', 'zerospam' ); ?>',
                  <?php break;
                case 'undefined_form': ?>
                  '<?php echo __( 'Undefined Form', 'zerospam' ); ?>',
                  <?php break;
                case 'registration_spam': ?>
                  '<?php echo __( 'Spam Registrations', 'zerospam' ); ?>',
                  <?php break;
                case 'cf7_spam': if ( zerospam_plugin_check( 'cf7' ) && ! empty( $this->settings['cf7_support'] ) && $this->settings['cf7_support'] ): ?>
                  '<?php echo __( 'Contact Form 7', 'zerospam' ); ?>',
                  <?php endif; break;
                case 'gf_spam': if ( zerospam_plugin_check( 'gf' ) && ! empty( $this->settings['gf_support'] ) && $this->settings['gf_support'] ): ?>
                  '<?php echo __( 'Gravity Forms', 'zerospam' ); ?>',
                  <?php endif; break;
                case 'bp_registration_spam': if ( zerospam_plugin_check( 'bp' ) && ! empty( $this->settings['bp_support'] ) && $this->settings['bp_support'] ): ?>
                  '<?php echo __( 'BuddyPress', 'zerospam' ); ?>',
                  <?php endif; break;
                case 'nf_spam': if ( zerospam_plugin_check( 'nf' ) && ! empty( $this->settings['nf_support'] ) && $this->settings['nf_support'] ): ?>
                  '<?php echo __( 'Ninja Forms', 'zerospam' ); ?>',
                  <?php endif; break;
                case 'wpf_spam': if ( zerospam_plugin_check( 'wpf' ) && ! empty( $this->settings['wpf_support'] ) && $this->settings['wpf_support'] ): ?>
                  '<?php echo __( 'WPForms', 'zerospam' ); ?>',
                  <?php endif; break;
                default: if ( $key != 'data' ): ?>
                  '<?php echo $key; ?>',
              <?php endif; endswitch;
            endforeach; ?>
        ],
        xLabels: 'day',
        lineColors: [
          <?php foreach ( $ary as $key => $val ):
            switch ( $key ):
              case 'comment_spam': ?>
                '#00639e',
                <?php break;
              case 'registration_spam': ?>
                '#ff183a',
                <?php break;
              case 'cf7_spam': if ( zerospam_plugin_check( 'cf7' ) && ! empty( $this->settings['cf7_support'] ) && $this->settings['cf7_support'] ): ?>
                '#fddb5a',
                <?php endif; break;
              case 'gf_spam': if ( zerospam_plugin_check( 'gf' ) && ! empty( $this->settings['gf_support'] ) && $this->settings['gf_support'] ): ?>
                '#222d3a'
                <?php endif; break;
              case 'bp_registration_spam': if ( zerospam_plugin_check( 'bp' ) && ! empty( $this->settings['bp_support'] ) && $this->settings['bp_support'] ): ?>
                '#a0d5f4'
                <?php endif; break;
              case 'nf_spam': if ( zerospam_plugin_check( 'nf' ) && ! empty( $this->settings['nf_support'] ) && $this->settings['nf_support'] ): ?>
                '#ef4748',
                <?php endif; break;
              case 'wpf_spam': if ( zerospam_plugin_check( 'wpf' ) && ! empty( $this->settings['wpf_support'] ) && $this->settings['wpf_support'] ): ?>
                '#e27730',
                <?php endif; break;
              default: if ( $key != 'data' ): ?>
                '#c2c2c2',
            <?php endif; endswitch;
          endforeach; ?>
        ]
        });
    });
    </script>
    <table class="zero-spam__table">
      <thead>
        <tr>
          <th><?php echo __( 'Date', 'zerospam' ); ?></th>
          <th width="90"><?php echo __( 'Type', 'zerospam' ); ?></th>
          <?php if ( $ip_location_support ): ?><th><?php echo __( 'Location', 'zerospam' ); ?></th><?php endif; ?>
          <th width="106"><?php echo __( 'IP', 'zerospam' ); ?></th>
          <th><?php echo __( 'Page', 'zerospam' ); ?></th>
          <th><?php echo __( 'Status', 'zerospam' ); ?></th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ( $spam['raw'] as $key => $obj ):
          switch ( $obj->type ) {
            case 1:
              $type = '<span class="zero-spam__label zero-spam__bg--primary">' . __( 'Registration', 'zerospam' ) . '</span>';
              break;
            case 2:
              $type = '<span class="zero-spam__label zero-spam__bg--secondary">' . __( 'Comment', 'zerospam' ) . '</span>';
              break;
            case 3:
              $type = '<span class="zero-spam__label zero-spam__bg--trinary">' . __( 'Contact Form 7', 'zerospam' ) . '</span>';
              break;
            case 4:
              $type = '<span class="zero-spam__label zero-spam__bg--gf">' . __( 'Gravity Forms', 'zerospam' ) . '</span>';
              break;
            case 5:
              $type = '<span class="zero-spam__label zero-spam__bg--bpr">' . __( 'BP Registration', 'zerospam' ) . '</span>';
              break;
            case 6:
              $type = '<span class="zero-spam__label zero-spam__bg--nf">' . __( 'Ninja Forms', 'zerospam' ) . '</span>';
              break;
            case 7:
              $type = '<span class="zero-spam__label zero-spam__bg--wpf">' . __( 'WPForms', 'zerospam' ) . '</span>';
              break;
            default:
              $type = '<span class="zero-spam__label zero-spam__bg--misc">' . __( $obj->type, 'zerospam' ) . '</span>';
          }
        ?>
        <tr data-ip="<?php echo $obj->ip; ?>" id="row-<?php echo $obj->zerospam_id; ?>">
          <td>
            <?php
            echo date_i18n(
              'l, F jS, Y g:ia',
              strtotime( $obj->date )
            );
            ?>
          </td>
          <td><?php echo isset( $type ) ? $type : '&mdash;'; ?></td>
          <?php if ( $ip_location_support ): ?>
          <td>
            <div data-ip-location="<?php echo $obj->ip; ?>"><i class="fa fa-search"></i></div>
          </td>
          <?php endif; ?>
          <td>
            <a href="http://ip-lookup.net/index.php?ip=<?php echo $obj->ip; ?>" target="_blank">
              <?php echo $obj->ip; ?> <i class="fa fa-external-link-square"></i></a>
          </td>
          <td>
            <?php if ( isset( $obj->page ) ): ?>
            <a href="<?php echo esc_url( $obj->page ); ?>" target="_blank"><?php echo $obj->page; ?> <i class="fa fa-external-link-square"></i></a>
            <?php else: ?>
              <?php echo __( 'Unknown', 'zerospam' ); ?>
            <?php endif; ?>
          </td>
          <td class="zero-spam__status">
            <?php if( zerospam_is_blocked( $obj->ip ) ): ?>
            <span class="zero-spam__label zero-spam__bg--primary"><?php echo __( 'Blocked', 'zerospam' ); ?></span>
            <?php else: ?>
            <span class="zero-spam__label zero-spam__bg--trinary"><?php echo __( 'Unblocked', 'zerospam' ); ?></span>
            <?php endif; ?>
          </td>
          <td class="zero-spam__text-center">
            <i class="fa fa-circle-o-notch fa-spin"></i>&nbsp;
            <i class="fa fa-edit"></i>&nbsp;
            <a href="#" class="button button-small zero-spam__block-ip"
              data-ip="<?php echo $obj->ip; ?>"><i class="fa fa-gear"></i></a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?php zerospam_pager( $limit, zerospam_get_spam_count(), $page, $tab ); ?>
    <?php else: ?>
      <?php echo __( 'No spammers detected yet!', 'zerospam'); ?>
    <?php endif; ?>
  </div>
</div>
