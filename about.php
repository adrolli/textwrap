<?php include("header.php"); ?>

      <br>
      <h2>About</h2>
      <br>
      <p>TextWrap is a unique piece of PHP-software made by <b>Alf Drollinger</b> for the Flow Design Kickoff.</p>
      <br>
      <h2>Development</h2>
      <br>
      <p>Textwrap is developed by walking the following line:</p>
      <ul>
        <li>Create the index.php-file</li>
        <li>Use the Bootstrap Starter-template</li>
        <li>Add the HTML-form for input and output</li>
        <li>Create the file textwrap.php with code for the Webapp</li>
        <li>Extend the Webapp-code for CLI</li>
        <li>Creating this file about.php for documentation</li>
        <li>Create unique identity: claim, logo and logo-font using a few lines of CSS</li>
        <li>Create header.php and footer.php to organize code</li>
      </ul>
      <br>
      <h2>What about the flow?</h2>
      <br>
      <p>Input <b>givenText</b> and <b>wrapTextAfter</b> -> wordwrap-function -> Output <b>wrappedText</b></p>
      <br>
      <h2>Usage</h2>
      <br>
      <p>You can use the tool as Webapp or on command line:</p>
      <br>
      <h3>WebApp</h3>
      <br>
      <p>Go to <a href="index.php">WordWrap</a> and input the values for <b>givenText</b> and <b>wrapTextAfter</b>. Press the <b>Wrap my text</b> button then.</p>
      <br>
      <h3>CLI</h3>
      <br>
      <p>Use the CLI command 
        <code>php textwrap.php givenText="Give me your Text and I wrap it for you, even if you're using the CLI" wrapTextAfter=10</code>.
      </p>

      <br>

      <a href="index.php" class="btn btn-primary">Back to the awesome TextWrap tool</a>

<?php include("footer.php"); ?>