<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message - Spirit Light Ministries Online Church</title>
    <style>
        /* Reset styles for email clients */
        body,
        table,
        td,
        div,
        p {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Container styles */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }

        /* Header styles */
        .header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 2px solid #ff0000;
            background-color: #f8f8f8;
        }

        .logo {
            max-width: 200px;
            height: auto;
            margin-bottom: 10px;
        }

        .church-name {
            font-size: 24px;
            color: #000000;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .church-subtitle {
            font-size: 16px;
            color: #666666;
            font-style: italic;
        }

        /* Content styles */
        .content {
            padding: 30px 0;
        }

        .message-header {
            font-size: 22px;
            color: #000000;
            margin-bottom: 25px;
            line-height: 1.4;
        }

        .message-field {
            margin-bottom: 15px;
            background-color: #f9f9f9;
            padding: 12px;
            border-radius: 5px;
        }

        .field-label {
            color: #ff0000;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .field-value {
            color: #333333;
            display: block;
        }

        /* Footer styles */
        .footer {
            text-align: center;
            padding: 20px;
            border-top: 2px solid #ff0000;
            background-color: #f8f8f8;
        }

        .social-links {
            margin-bottom: 15px;
        }

        .social-links a {
            color: #ff0000;
            text-decoration: none;
            margin: 0 10px;
        }

        .social-links a:hover {
            text-decoration: underline;
        }

        .church-info {
            font-size: 13px;
            color: #666666;
            margin-bottom: 10px;
        }

        .timestamp {
            font-size: 12px;
            color: #999999;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <img src="{{ asset('images/logo-dark.png') }}" alt="Spirit Light Ministries Logo" class="logo">
            <div class="church-name">SPIRIT LIGHT MINISTRIES</div>
            <div class="church-subtitle">Online Church</div>
        </div>

        <div class="content">
            <h1 class="message-header">Hello Pastor Jephter (PJ Wekesa),<br>You have received a new message from
                {{ $contact->name }}:</h1>

            <div class="message-field">
                <span class="field-label">Sender's Name:</span>
                <span class="field-value">{{ $contact->name }}</span>
            </div>

            <div class="message-field">
                <span class="field-label">Email Address:</span>
                <span class="field-value">{{ $contact->email }}</span>
            </div>

            @if ($contact->phone)
                <div class="message-field">
                    <span class="field-label">Phone Number:</span>
                    <span class="field-value">{{ $contact->phone }}</span>
                </div>
            @endif

            <div class="message-field">
                <span class="field-label">Subject:</span>
                <span class="field-value">{{ $contact->subject }}</span>
            </div>

            <div class="message-field">
                <span class="field-label">Message Content:</span>
                <p class="field-value">{{ $contact->message }}</p>
            </div>
        </div>

        <div class="footer">

            <div class="church-info">
                <p>Spirit Light Ministries Online Church</p>
                <p>Led by Pastor Jephter Wekesa (PJ Wekesa)</p>
                <p>Physical Church led by Prophet Caleb Wekesa</p>
            </div>

            <div class="timestamp">
                Sent on {{ date('F j, Y \a\t g:i A') }}
            </div>
        </div>
    </div>
</body>

</html>
