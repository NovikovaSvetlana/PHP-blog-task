<p> 2000 - <?= strftime("%Y")?></p>
</div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?= $assetsDirectory ?>/js/materialize.min.js"></script>
  
         <script>
        $(document).ready(function() {
        $('select').material_select();
        });
    </script>
      
    </body>
  </html>