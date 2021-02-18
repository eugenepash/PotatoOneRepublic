(function ($) {
  Drupal.behaviors.myModuleBehavior = {
    attach: function (context, settings) {
      $(context).find('.click-me').once('myCustomBehavior').click(function () {
        alert('Hello, World!');
      });
    }
  };
})(jQuery);
$(document).ready(function () {
  // Do some fancy stuff.
  // Do not use such code in Drupal 8 (and in Drupal 7 too).
});
