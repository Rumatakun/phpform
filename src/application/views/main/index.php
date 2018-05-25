<!--<div id="map">-->
<!---->
<!--</div>-->
<!---->
<!--<script>-->
<!--    function initMap() {-->
<!--        var uluru = {lat: 34.101244, lng: -118.343684};-->
<!--        var map = new google.maps.Map(document.getElementById('map'), {-->
<!--            zoom: 14,-->
<!--            center: uluru-->
<!--        });-->
<!--        var marker = new google.maps.Marker({-->
<!--            position: uluru,-->
<!--            map: map,-->
<!--        });-->
<!--    }-->
<!--</script>-->
<!--<script async defer-->
<!--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl3yxoR0i9-1sOnCNyKspU9zDOMh7rRkw&callback=initMap">-->
<!--</script>-->
<!---->
<!--~~~~~~ ajax file upload  ~~~~~~~~~~~~-->
<form action="form.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <input type="file" name="file_upload">
    <input type="submit" name="submit" value="Upload">
</form>


<!--~~~~~~ ajax file upload  ~~~~~~~~~~~~-->


<!--<form id="foo">-->
<!--    <label for=""></label>-->
<!--    <input id="firstname" name="firstname" type="text" value="" placeholder="firstname" />-->
<!--    <input id="lastname " name="lastname" type="text" value="" placeholder="lastname" />-->
<!--    <input id="birthdate " name="birthdate" type="date" value="" placeholder="birthdate" />-->
<!--    <select  name="country">-->
<!--        <option>USA</option>-->
<!--        <option>UK</option>-->
<!--    </select>-->
<!--    <input id="phone" name="phone" type="text" value="" placeholder="phone" />-->
<!--    <input id="email" name="email" type="text" value="" placeholder="email" />-->
<!--    <input id="report_subject" name="report_subject" type="text" value="" placeholder="email" />-->
<!---->
<!--    <input type="submit" value="Submit" />-->
<!--</form>-->
<!---->
<!--<script type="text/javascript">-->
<!--    // Variable to hold request-->
<!--    var request;-->
<!---->
<!--    // Bind to the submit event of our form-->
<!--    $("#foo").submit(function(event){-->
<!---->
<!--        // Prevent default posting of form - put here to work in case of errors-->
<!--        event.preventDefault();-->
<!---->
<!--        // Abort any pending request-->
<!--        if (request) {-->
<!--            request.abort();-->
<!--        }-->
<!--        // setup some local variables-->
<!--        var $form = $(this);-->
<!---->
<!--        // Let's select and cache all the fields-->
<!--        var $inputs = $form.find("input, select, button, textarea");-->
<!---->
<!---->
<!--        // Serialize the data in the form-->
<!--        var serializedData = $form.serialize();-->
<!---->
<!--        // Let's disable the inputs for the duration of the Ajax request.-->
<!--        // Note: we disable elements AFTER the form data has been serialized.-->
<!--        // Disabled form elements will not be serialized.-->
<!--        $inputs.prop("disabled", true);-->
<!---->
<!--        // Fire off the request to /form.php-->
<!--        request = $.ajax({-->
<!--            url: "",-->
<!--            type: "post",-->
<!--            data: serializedData-->
<!--        });-->
<!---->
<!--        // Callback handler that will be called on success-->
<!--        request.done(function (response, textStatus, jqXHR){-->
<!--            // Log a message to the console-->
<!--        });-->
<!---->
<!--        // Callback handler that will be called on failure-->
<!--        request.fail(function (jqXHR, textStatus, errorThrown){-->
<!--            // Log the error to the console-->
<!--            console.error(-->
<!--                "The following error occurred: "+-->
<!--                textStatus, errorThrown-->
<!--            );-->
<!--        });-->
<!---->
<!--        // Callback handler that will be called regardless-->
<!--        // if the request failed or succeeded-->
<!--        request.always(function () {-->
<!--            // Reenable the inputs-->
<!--            $inputs.prop("disabled", false);-->
<!--        });-->
<!---->
<!--    });-->
<!--</script>-->










<!--To participate in the conference, please fill out the form-->

<!--<form >-->
<!--    <input type="text" placeholder="firstname">-->
<!--    <input type="text" placeholder="lastname">-->
<!--    <input type="text" placeholder="report subject">-->
<!--    <input type="text" placeholder="country">-->
<!--    <input type="text" placeholder="phone">-->
<!--    <input type="text" placeholder="email">-->
<!--    <button type="submit">next</button>-->
<!--</form>-->
<!--<form>-->
<!--    <input type="text" placeholder="company">-->
<!--    <input type="text" placeholder="position">-->
<!--    <input type="text" placeholder="about me">-->
<!--    <input type="file" placeholder="photo">-->
<!--    <button type="submit">next</button>-->
<!--</form>-->






<!--<script type="text/javascript">-->
<!--    $(document).ready(function(){-->
<!--        $("button").click(function(){-->
<!---->
<!--            $.ajax({-->
<!--                type: 'POST',-->
<!--                data: {-->
<!--                    name: 'myname',-->
<!--                    action: 'register.php'-->
<!--                },-->
<!--                url: '',-->
<!--                success: function(data) {-->
<!--                    alert(data);-->
<!--                    $("p").text(data);-->
<!---->
<!--                }-->
<!--            });-->
<!--        });-->
<!--    });-->
<!--</script>-->








<!--~~~~~~~~~~~~~~~~~ social ~~~~~~~~~~-->


<!---->
<!--<a href="https://twitter.com/share?ref_src=twsrc%5Etfw"   class="twitter-share-button" data-text=' --><?php //echo @$twMessage ?><!--' data-url='--><?php //echo @$twUrl ?><!--' data-lang="en" data-show-count="false">-->
<!--    <img src="public/images/default.jpg"  alt="lorem" >'-->
<!--</a>-->
<!--<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
<!---->
<!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->
<!--<g:plus action="share"></g:plus>-->
<!---->
<!--<div id="fb-root"></div>-->
<!--<script>(function(d, s, id) {-->
<!--        var js, fjs = d.getElementsByTagName(s)[0];-->
<!--        if (d.getElementById(id)) return;-->
<!--        js = d.createElement(s); js.id = id;-->
<!--        js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.0';-->
<!--        fjs.parentNode.insertBefore(js, fjs);-->
<!--    }(document, 'script', 'facebook-jssdk'));</script>-->
<!---->
<!--<div class="fb-share-button" data-href="http://ololo.com" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fololo%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Поделиться</a></div>-->
