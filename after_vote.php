<?php

    echo "<h2>You will be logged out soon</h2>";
?>
<script type="text/javascript">
    function delayedRedirect()
    {
        window.location.href="vote.php"
    }
</script>

<body onLoad = "setTimeout('delayedRedirect()', 45000)">

    <br>
    <h3 style="text-align: center;">In 45 Seconds!</h3>
    
</body>