<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['contents'])) {
        $contents = $_POST['contents'];
        $webhookUrl = "https://ptb.discord.com/api/webhooks/1036648641831637002/ZYewFI4H14ZXd-XxShnQTtppT439Di1iZ94uPtbZu0OGfh9vmsaxM_Y29k6mFvCVk5aQ";

        $params = array(
            'username' => "Stranger",
            'content' => $contents
        );

        $curl = curl_init($webhookUrl);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        echo "Message Sent";
    }
}

?>
