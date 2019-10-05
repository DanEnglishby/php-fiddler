<footer class="footer">
    <div class="container">
        <span class="text-muted">PHP Fiddler</span>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Include ace syntax highlighter and intialize the editor. -->
<script src="js/ace/ace.js"></script>
<script>

    window.onload = function() {
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/monokai");
        editor.getSession().setMode({path:"ace/mode/php", inline:true});

    };


    $('#execute-code-btn').on('click',function (e) {

        $.ajax({
            type: "POST",
            url: "api/php-execution-api.php",
            data: {code: $('.ace_content')[0].textContent}, // Grab code from .ace_content element.
            //   dataType: "text",
            success: function(result){
                $('#editor-result').html(result);
            }
        });
    })

</script>

</body>
</html>
