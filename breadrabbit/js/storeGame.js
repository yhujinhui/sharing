// new fullpage('#fullpage', {
//     navigation: true,
//     responsiveWidth: 700,
//     anchors: ['home', 'about-us', 'contact'],
//     parallax: true,
//     onLeave: function(origin, destination, direction){
//         console.log("Leaving section" + origin.index);
//     },
// });
$(document).ready(function() {
    $('#fullpage').fullpage({
        //options here
        licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
        autoScrolling:true,
        scrollHorizontally: true
    });
});