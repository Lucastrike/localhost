$(function() {
    var BV = new $.BigVideo();
    BV.init();
    BV.show('video/doit.mp4');
});

/*$(function() {
    var BV = new $.BigVideo({useFlashForFirefox:false});
	BV.init();
    BV.show([
        { type: "video/mp4",  src: "vids/river.mp4" },
        { type: "video/webm", src: "vids/river.webm" },
        { type: "video/ogg",  src: "vids/river.ogv" }
    ]);
});*/
