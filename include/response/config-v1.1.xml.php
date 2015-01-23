<? echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>"; ?>

<clientConfig version="1.1">
    <emailProvider id="<? echo substr($this->user['email'], strpos($this->user['email'], '@')+1) ?>">
        <domain><? echo substr($this->user['email'], strpos($this->user['email'], '@')+1) ?></domain>
        <displayName>SpicyWeb Mail Service</displayName>
        <displayShortName>SpicyMail</displayShortName>
        <incomingServer type="pop3">
            <hostname><? echo $this->host['hostname'] ?></hostname>
            <port>995</port>
            <socketType>SSL</socketType>
            <authentication>password-cleartext</authentication>
            <username><? echo $this->user['login'] ?></username>
            <pop3>
                <leaveMessagesOnServer>true</leaveMessagesOnServer>
                <downloadOnBiff>true</downloadOnBiff>
                <daysToLeaveMessagesOnServer>10</daysToLeaveMessagesOnServer>
            </pop3>
        </incomingServer>
        <incomingServer type="imap">
            <hostname><? echo $this->host['hostname'] ?></hostname>
            <port>993</port>
            <socketType>SSL</socketType>
            <authentication>password-cleartext</authentication>
            <username><? echo $this->user['login'] ?></username>
        </incomingServer>
        <outgoingServer type="smtp">
            <hostname><? echo $this->host['hostname'] ?></hostname>
            <port>587</port>
            <socketType>STARTTLS</socketType>
            <authentication>password-cleartext</authentication>
            <username><? echo $this->user['login'] ?></username>
        </outgoingServer>
    </emailProvider>
</clientConfig>