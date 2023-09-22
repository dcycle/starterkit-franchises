/**
 * @file
 * Alerts.
 * See https://www.cssscript.com/alert-banner-dismissible/#google_vignette.
 */

// @codingStandardsIgnoreStart
(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.MyAlert = {
    attach: function (context, settings) {
      const dismissible = new Dismissible(document.querySelector('#dismissible-container'));

      // dismissible.info('This is an informational alert!')
      // dismissible.success('Everything was okay!')
      // dismissible.error('Oops! Something went wrong...')
    }
  };
})(jQuery, Drupal, drupalSettings);
// @codingStandardsIgnoreEnd
