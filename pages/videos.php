<div class="container">
    <ul class="breadcrumb wow fadeInRight">
        <li>
            <a href="home">Página Inicial</a>
        </li>
        <li>Videos</li>
    </ul>
    <legend><h1 class="wow fadeInLeft"><i class="fa fa-video-camera" aria-hidden="true"></i> Videos</h1></legend>

    <!-- VIDEOS DO YOUTUBE -->
    <div id="your-page-column" class="not-a-part-of-youmax-plugin">


        <!--Youmax Container-->
        <div class="youmax"></div>
        <!-- ends -->

    </div>
    <!-- Youmax Call -->
    <script>

        $(document).ready(function () {

            $(".youmax").youmax({
                apiKey: "AIzaSyAlhAqP5RS7Gxwg_0r_rh9jOv_5WfaJgXw",

                channelLink: "https://www.youtube.com/user/dudu18xb",
                playlistLink: "https://www.youtube.com/playlist?list=PL6_h4dV9kuuIOBDKgxu3q9DpvvJFZ6fB5",

                defaultTab: "Uploads", //Uploads|Playlists|Featured
                videoDisplayMode: "popup", //popup|link|inline

                maxResults: "9",
                autoPlay: false,
                displayFirstVideoOnLoad: true, //for inline video display mode only


                responsiveBreakpoints: [600, 900, 2000, 2500],

                loadMoreText: "<i class=\"fa fa-plus\"></i>&nbsp;&nbsp;Show me more videos..",
                previousButtonText: "<i class=\"fa fa-angle-left\"></i>&nbsp;&nbsp;Previous",
                nextButtonText: "Next&nbsp;&nbsp;<i class=\"fa fa-angle-right\"></i>",
                loadingText: "loading...",
                allDoneText: "<i class=\"fa fa-times\"></i>&nbsp;&nbsp;All done..",

                hideHeader: false,
                hideTabs: false,
                hideLoadingMechanism: false,

            });
        });


    </script>
    <!-- ends -->

</div>
