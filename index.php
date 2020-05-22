<?php include("textwrap.php"); ?>
<?php include("header.php"); ?>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
          <div class="form-group">
            <textarea id="givenText" name="givenText" style="min-width: 100%" rows="10"><?php echo $givenText ?></textarea>
          </div>

          <div class="form-group d-flex">
            <label for="wrapTextAfter" style="margin-top: 8px;">Wrap text after </label>
            &nbsp;<input type="text" name="wrapTextAfter" class="form-control" id="wrapTextAfter" style="width:50px" placeholder="<?php echo $wrapTextAfter ?>">&nbsp;<span  style="margin-top: 8px;">characters</span>
          </div>

          <div class="form-group">
            <textarea id="wrappedText" name="wrappedText" style="min-width: 100%" rows="10" readonly><?php echo $wrappedText ?></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Wrap my text</button>
          <a href="about.php" class="btn btn-secondary">What? How?</a>
      </form>

<?php include("footer.php"); ?>