<?php

$calculationWasRequested = $_GET['calculateRequest'];

$firstSide = 3;
$secondSide = 4;

if (isset($calculationWasRequested)) {
  $result = sqrt(pow($firstSide, 2) + pow($secondSide, 2));
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet'>
  <title>Hipotenusa</title>
</head>

<body>
  <main class='w-6/12 m-auto p-2'>
    <div class='text-center border-2 border-indigo-300 rounded-md m-5 p-3'>
      <h2 class='text-indigo-400 text-xl my-7'>
        This webpage calculates the hypotenuse of <strong><?php echo "$firstSide cm and $secondSide cm"; ?></strong>.
      </h2>
      <?php
      if (!isset($result)) {
        echo '<p class="opacity-75 my-2">Click <em class="text-indigo-400">"calculate"</em> to see the result!</p>';
      } else {
        echo "<p class='opacity-75 my-2'>Resultado: <strong class='text-indigo-400'>$result</strong></p>";
      }
      ?>
      <form method='GET' action=<?php echo $_SERVER['PHP_SELF']; ?>>
        <button class='bg-indigo-300 hover:bg-indigo-400 text-white p-3 rounded-md' type='submit' name='calculateRequest'>Calculate</button>
      </form>
      <p class='italic opacity-75 my-3'>Manuel Zapata - 27.971.134 - N1013</p>
    </div>
  </main>
</body>

</html>