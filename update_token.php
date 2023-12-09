<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $cashEarned = $_POST['correctGuess'];

        $path = "/home/hz2330/databases";

        $db = new SQLite3($path.'/webDevFinal.db');

        $storedPwd = $db->query('SELECT Password FROM users WHERE Username=$email');
        

        if ($storedPwd == $password)
        {
            $email = $_SESSION['user_email']
            $currTokensQuery = $db->prepare('SELECT Tokens,Cash FROM users WHERE email = :email');
            $currTokensQuery->bindParam(':email', $email);
            $currTokensQuery->execute();
        
            $currTokensResult = $currTokensQuery->fetch(PDO::FETCH_ASSOC);

            if ($currTokensResult) {
                $currTokens = $currTokensResult['Tokens'];
                $currCash = $currTokensResult['Cash'];
                
                $newCash = $currCash + $cashEarned;

                $updateStatement = $db->prepare('UPDATE users SET Cash = :newCash, Tokens = :currTokensMinus1 WHERE email = :email');
                $updateStatement->bindParam(':newCash', $newCash);
                $updateStatement->bindParam(':currTokensMinus1', $currTokens - 1);
                $updateStatement->bindParam(':username', $email);
                $updateStatement->execute();
            }
        }

        echo 'Tokens updated successfully';
        $db->close();
?>