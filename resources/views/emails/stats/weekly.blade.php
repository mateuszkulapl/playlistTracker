<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CIF: Statystyki postępu w nauce {{ $start->isoFormat('DD.MM.YYYY') }} - {{ $end->isoFormat('DD.MM.YYYY') }}</title>

    <style type="text/css">
        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
            color: #263238;
            line-height: 1.6;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0;
        }
    </style>
</head>

<body style="width:100%; margin:0; padding:0; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; background: #85c5ce;">

    <!-- body wrapper -->
    <table style="margin:0; padding:0; width:100%; line-height: 100% !important;" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td valign="top">
                <!-- edge wrapper -->
                <table style="border-radius: 4px; border: 2px solid #75b5be; box-shadow: 0px 0px 8px 2px #75b5be; background: #fafafa; margin:20px auto 10px auto; padding:20px 0;" cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                    <tr>
                        <td valign="top">
                            <!-- content wrapper -->
                            <table style="background: #fafafa;" cellpadding="0" cellspacing="0" border="0" align="center" width="560">
                                <tr>
                                    <td style="vertical-align: top;" valign="top">
                                        <table style="" cellpadding="0" cellspacing="0" border="0" align="center">
                                            <tr style="">
                                                <td style="vertical-align: top;" valign="top" align="center">
                                                    <h1>Ukończone lekcje w ubiegłym tygodniu<br>{{ $start->isoFormat('DD.MM.YYYY') }} - {{ $end->isoFormat('DD.MM.YYYY') }}</h1>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- / content wrapper -->
                        </td>
                    </tr>
                </table>
                <!-- / edge wrapper -->
            </td>
        </tr>

        @foreach ($watchedGroups as $category)
            <tr>
                <td valign="top">
                    <!-- edge wrapper -->
                    <table style="border-radius: 4px; border: 2px solid #75b5be; box-shadow: 0px 0px 8px 2px #75b5be; background: #fafafa; margin:10px auto 10px auto; padding:20px 0;" cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                        <tr>
                            <td valign="top">
                                <!-- content wrapper -->
                                <table style="background: #fafafa;" cellpadding="0" cellspacing="0" border="0" align="center" width="560">
                                    <tr>
                                        <td style="vertical-align: top;" valign="top">
                                            <table style="margin-bottom:10px;" cellpadding="0" cellspacing="0" border="0" align="center">
                                                <tr style="">
                                                    <td style="vertical-align: top;" valign="top" align="center">
                                                        <h2>{{ $category->name }}</h2>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table style="border:0;margin-bottom:20px;" cellpadding="0" cellspacing="0" width="100%">
                                                <tr bgcolor="#e5e5e5" style="color:#e5e5e5">
                                                  <td bgcolor="#16a34a" style="width:{{$category->watchedPercentage()}}%; background-color:#16a34a; float:left; height:15px;"></td>
                                                  <td bgcolor="#7c3aed" style="width:{{$category->inProgressPercentage()}}%; background-color:#7c3aed; float:left; height:15px;"></td>
                                                  </tr>
                                            </table>
                                            <table cellpadding="0" cellspacing="0" border="0" align="left">
                                                @foreach ($category->watchedElements as $watchedElement)
                                                    <tr>
                                                        <td style="vertical-align: middle;" valign="middle" align="left">
                                                            <img src="{{ $watchedElement->images('default') }}" width="120px">
                                                        </td>
                                                        <td style="padding-left: 10px;vertical-align: middle;" valign="middle" align="left">
                                                            {{ $loop->iteration }}. {{ $watchedElement->title }}
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <!-- / content wrapper -->
                            </td>
                        </tr>
                    </table>
                    <!-- / edge wrapper -->
                </td>
            </tr>
        @endforeach

        <tr>
            <td valign="top">
                <!-- edge wrapper -->
                <table style="border-radius: 4px; border: 2px solid #75b5be; box-shadow: 0px 0px 8px 2px #75b5be; background: #fafafa; margin:10px auto 20px auto; padding:20px 0;" cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                    <tr>
                        <td valign="top">
                            <!-- content wrapper -->
                            <table style="background: #fafafa;" cellpadding="0" cellspacing="0" border="0" align="center" width="560">
                                <tr>
                                    <td style="vertical-align: top;" valign="top">
                                        <table style="" cellpadding="0" cellspacing="0" border="0" align="center">
                                            <tr style="">
                                                <td style="vertical-align: top;" valign="top" align="center">
                                                    <h2>{{ $motivationalQuote }}</h2>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- / content wrapper -->
                        </td>
                    </tr>
                </table>
                <!-- / edge wrapper -->
            </td>
        </tr>

    </table>
    <!-- / page wrapper -->
</body>

</html>
