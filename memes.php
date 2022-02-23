<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
   	 	<title>bgeneric - memes</title>
   	 	<link href="css/style.css" rel="stylesheet">
		<meta name="viewport" content="height=device-height, width=device-width, initial-scale=0.3, maximum-scale=1">
		<meta name="description" content="The home of GenericEric">
		<meta name="keywords" content="Memes, Meme, Gaming, Tutorials, BBS, IRC, Technology, Linux, Open Source, Telnet, DOS, FreeDOS, MS-DOS, Retro Gaming, Retro, Retro Computing, Programming">
		<meta name="author" content="GenericEric">
	</head>
    <table>
        <tr>
          <th>Image Name</th>
          <th>Image</th>
        </tr>
        <?php
        $files = glob("memes/*.*");
        for ($i = 0; $i < count($files); $i++) {
            $image = $files[$i];
            $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
            );
        
            $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_file)) {
              echo "<tr><td>";
              echo basename($image);
              echo "</td><td>";
              echo '<img src="' . $image . '" alt="Random image" ,width=100px, height=100px /><br>';
              echo "</td></tr>";
        } else {
        continue;
        }
        }
        ?>
        </table>
    
    