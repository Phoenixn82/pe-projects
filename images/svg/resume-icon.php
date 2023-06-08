


<svg width="100%" height="100%" viewBox="0 0 1690 1418" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
  <defs>
    <clipPath id="specific-part-clip">
      	<path d="M1172.84,226.265l-0,787.157c-0,0 -959.308,-6.826 -964.407,-14.48c-5.099,-7.653 -62.971,-425.651 9.037,-768.739c-0,0 244.188,-55.51 943.961,-3.013" style="fill:#151619;stroke:#543a00;stroke-opacity:0;stroke-width:39.58px;"/>
    </clipPath>
  </defs>

	<g>



	<path d="M1662.62,1052.9l-196.28,61.559l-0,-845.355c68.174,28.644 167.575,71.783 196.28,84.264l-0,699.532Zm-42.605,85.21l-153.675,46.551l-0,-42.206l153.675,-48.18l-0,43.835Zm-13.116,54.647l-140.559,42.726l-0,-22.914l140.559,-42.571l-0,22.759Zm-154.135,111.563l-289.876,86.014c-310.073,-21.833 -888.177,-62.917 -943.458,-68.195c-1.622,-6.399 -2.568,-23.725 1.588,-57.741c174.46,19.86 466.499,46.483 778.383,46.483c68.053,0 137.134,-1.27 206.052,-4.155l182.326,-19.691l64.985,-19.691l0,36.976Zm-1382.29,-117.706c287.288,22.894 1221.1,55.255 1264.45,56.741l105.495,0l-56.761,17.259l-179.772,19.44c-522.869,21.833 -1050.08,-49.686 -1133.41,-61.626l-0,-31.814Zm-43.767,-1140.41l1308.02,-19.373l-0,1189.8c-31.563,-1.094 -1099.6,-38.246 -1308.02,-60.816l-0,-1109.61Zm1334.73,-17.664l78.189,6.899l-0,1181.21l-78.189,-0l-0,-1188.11Zm327.892,307.324l-8.014,-3.494c-1.399,-0.608 -135.538,-59.039 -214.977,-92.224l-0,-229.168l-124.362,-10.974l-1341.98,19.88l-0,1159.58l11.677,1.487c8.622,1.094 19.407,2.23 32.09,3.392l0,57.106l11.332,1.73c1.696,0.263 53.126,8.001 139.357,18.15c-6.291,49.829 -5.055,83.088 16.717,86.744c19.711,3.365 856.863,62.37 952.25,69.087l2.412,0.169l313.642,-93.069l-0,-64.999l154.134,-46.7l0,-50.646l13.116,-3.973l0,-72.04l42.605,-13.352l0,-736.684Z" style="fill:#fff;fill-rule:nonzero;"/>

	<path d="M207.439,1001.5c-56.539,-428.948 -1.548,-722.696 8.649,-771.328c33.962,-9.954 221.404,-49.221 957.919,-1.825l-0,784.891c-331.19,-2.095 -792.993,-6.555 -966.568,-11.738m-56.931,-409.798c-0.682,-173.846 -1.973,-348.739 -2.345,-397.736l116.145,-0c-47.727,6.588 -63.323,13.001 -65.1,13.798l-6.021,2.683l-1.534,6.413c-0.743,3.101 -72.668,312.668 -11.278,783.735c-13.595,-0.514 -24.272,-1.034 -31.489,-1.561c1.818,-32.232 2.744,-125.139 1.622,-407.332m1023.5,-390.121c-44.247,-2.838 -86.561,-5.372 -126.964,-7.615l126.964,-0l-0,7.615Zm-1052.78,-34.327l0.108,13.461c2.507,313.006 4.709,784.715 0.723,824.495l-2.913,4.46l3.737,7.041c4.953,9.312 5.467,10.285 178.198,13.738c87.568,1.75 209.274,3.473 361.74,5.129c259.549,2.804 521.834,4.446 524.456,4.459l13.441,0.082l-0,-872.865l-1079.49,0Z" style="fill:#fff;fill-rule:nonzero;"/></g>
<image id="gif-element" xlink:href="images/static-glitch.gif" width="100%" height="100%" preserveAspectRatio="none" style="display: none;" clip-path="url(#specific-part-clip)" />
</svg>








<script type="text/javascript">
const svgElement = document.querySelector('.resume');
const gifElement = document.getElementById('gif-element');
let opacity = 0;
let isHovered = false;

svgElement.addEventListener('mouseenter', function() {
  isHovered = true;
  gifElement.style.display = 'inline';
  fadeIn();
});

svgElement.addEventListener('mouseleave', function() {
  isHovered = false;
  fadeOut();
});

function fadeIn() {
  if (opacity < 1 && isHovered) {
    opacity += 0.01;
    gifElement.style.opacity = opacity;
    requestAnimationFrame(fadeIn);
  }
}

function fadeOut() {
  if (opacity > 0 && !isHovered) {
    opacity -= 0.01;
    gifElement.style.opacity = opacity;
    requestAnimationFrame(fadeOut);
  } else {
    gifElement.style.display = 'none';
    opacity = 0; // Reset opacity to 0 when GIF is hidden
  }
}

</script>


