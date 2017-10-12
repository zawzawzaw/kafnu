java -jar "compiler.jar" \
  --js=../../js/manic-polyfill.js \
  --js=../jquery-other/jquery-1.9.1.min.js \
  --js=../jquery-other/jquery.mousewheel.min.js \
  --js=../misc-js/mobile-detect.js \
  --js=../misc-js/preloadjs-0.4.0.min.js \
  --js=../gsap/src/minified/TweenMax.min.js \
  --js=../gsap/src/minified/jquery.gsap.min.js \
  --js=../gsap/src/minified/easing/EasePack.min.js \
  --js=../gsap/src/minified/plugins/ScrollToPlugin.min.js \
  --js=../scrollmagic/scrollmagic/minified/ScrollMagic.min.js \
  --js=../scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js \
  --js=../scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js \
  --js=../slick-carousel/slick/slick.min.js \
  --js=../fullpage-js/vendors/scrolloverflow.min.js \
  --js=../fullpage-js/jquery.fullpage.min.js \
  --js=../raphael/raphael.min.js \
  --js=../gsap/src/minified/plugins/RaphaelPlugin.min.js \
  --js=../isotope/isotope.pkgd.min.js \
  --js=../wow/wow.min.js \
  --js=../jquery-validate/jquery.validate.min.js \
  --compilation_level WHITESPACE_ONLY \
  --js_output_file=../../js/minified/libraries-contact.min.js