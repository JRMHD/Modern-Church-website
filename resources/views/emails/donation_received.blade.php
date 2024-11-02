<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Donation Notification</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #cc0000;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .logo {
            max-width: 200px;
            height: auto;
            margin-bottom: 15px;
        }

        .content {
            padding: 30px;
        }

        .donation-details {
            background-color: #f8f8f8;
            border-radius: 6px;
            padding: 20px;
            margin: 20px 0;
        }

        .detail-row {
            margin-bottom: 12px;
        }

        .label {
            font-weight: bold;
            color: #666;
        }

        .value {
            color: #333;
        }

        .message-box {
            border-left: 4px solid #cc0000;
            padding-left: 15px;
            margin: 20px 0;
        }

        .footer {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <img src="{{ asset('images/logo-dark.png') }}" alt="Spirit Light Ministries Logo" class="logo">
            <h1>New Donation Received!</h1>
        </div>

        <div class="content">
            <p>Dear Pj Wekesa,</p>

            <p>You have received a new donation for Spirit Light Ministries Online Church. Here are the details:</p>

            <div class="donation-details">
                <div class="detail-row">
                    <span class="label">Donor Name:</span>
                    <span class="value">{{ $donation->name }}</span>
                </div>
                <div class="detail-row">
                    <span class="label">Email:</span>
                    <span class="value">{{ $donation->email }}</span>
                </div>
                <div class="detail-row">
                    <span class="label">Phone:</span>
                    <span class="value">{{ $donation->phone ?? 'N/A' }}</span>
                </div>
                <div class="detail-row">
                    <span class="label">Location:</span>
                    <span class="value">{{ $donation->location ?? 'N/A' }}</span>
                </div>
                <div class="detail-row">
                    <span class="label">Donation Amount:</span>
                    <span class="value" style="color: #cc0000; font-size: 1.2em; font-weight: bold;">
                        ${{ number_format($donation->amount, 2) }}
                    </span>
                </div>
            </div>

            @if ($donation->message)
                <div class="message-box">
                    <p class="label">Donor's Message:</p>
                    <p class="value">{{ $donation->message }}</p>
                </div>
            @endif

            <p>Please reach out to the donor to express your gratitude and provide any necessary follow-up information.
            </p>
        </div>

        <div class="footer">
            <p>Spirit Light Ministries Online Church</p>
            <p>Together we can make a difference in spreading God's love</p>
        </div>
    </div>
</body>

</html>
