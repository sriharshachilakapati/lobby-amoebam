<?php
$this->addStyle("game.css");
?>
<div class="valign-wrapper">
  <script src="<?php echo $this->u("src/lib/amoebam/amoebam/amoebam.nocache.js", true);?>"></script>
  <script type="text/javascript">
    lobby.load(function (){
      var canvas = $("canvas")[0];
      canvas.width = "";
      canvas.height = "";
      $("body canvas:last").addClass("valign").appendTo($("#workspace .valign-wrapper"));
    });
  </script>
</div>
