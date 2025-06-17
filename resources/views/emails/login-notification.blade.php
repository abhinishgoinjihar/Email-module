<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Notification</title>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"
        style="background-color: #f4f4f4;">
        <tr>
            <td align="center" style="padding: 20px;">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600"
                    style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td
                            style="padding: 20px; background-color: #007bff; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 24px; text-align: center;">Login
                                Notification</h1>
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                        <td style="padding: 30px; color: #333333;">
                            <p style="font-size: 16px; line-height: 1.5; margin: 0 0 10px;">Hello {{ $user->name }},
                            </p>
                            <p style="font-size: 16px; line-height: 1.5; margin: 0 0 20px;">
                                You successfully logged into your account at {{ $loginTime->format('d M Y, H:i:s') }}.
                            </p>
                            <p style="font-size: 14px; color: #666666; margin: 0 0 20px;">
                                If this wasn’t you, please secure your account immediately.
                            </p>
                            <!-- Button -->
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                style="margin: 0 auto;">
                                <tr>
                                    <td style="text-align: center;">
                                        <a href="{{ url('/dashboard') }}"
                                            style="display: inline-block; padding: 12px 24px; background-color: #007bff; color: #ffffff; text-decoration: none; border-radius: 4px; font-size: 16px;">
                                            Go to Dashboard
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td
                            style="padding: 20px; background-color: #f8f9fa; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; text-align: center;">
                            <p style="font-size: 12px; color: #666666; margin: 0;">
                                &copy; {{ date('Y') }} Email Module. All rights reserved.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
