<?php
$this->addStyle("game.css");
?>
<div class="valign-wrapper">
    <script src="<?php echo $this->u("src/lib/amoebam/amoebam/amoebam.nocache.js", true);?>"></script>
    <script type="text/javascript">
    lobby.load(function (){
        var canvas = $("canvas")[0];
        $("body canvas:last").addClass("valign").appendTo($("#workspace .valign-wrapper"));

        // Performance hack, disable error checking since this is a released game
        window.gl.getError = function()
        {
            return gl.NO_ERROR;
        }
    });
    </script>
</div>
