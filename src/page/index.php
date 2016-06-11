<script src="<?php echo $this->u("src/lib/amoebam/amoebam/amoebam.nocache.js", true);?>"></script>
<script type="text/javascript">
  lobby.load(function (){
    var canvas = $("canvas")[0];
    canvas.width = $("#workspace").width() * .8;
    canvas.height = $("#workspace").height() * .8;
    $("canvas").appendTo($("#workspace"));
  });
</script>
