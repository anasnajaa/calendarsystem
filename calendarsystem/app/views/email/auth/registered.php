{% extends 'email/templates/default.php' %}

{% block content %}
  <body style="margin: 0;padding: 0;min-width: 100%;background-color: #f6f6f8">
<!--<![endif]-->
    <center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #f6f6f8">
      <table class="preheader" style="border-collapse: collapse;border-spacing: 0;width: 100%;background-color: #ededf1">
        <tbody><tr>
          <td style="padding: 10px 0 12px 0;vertical-align: middle">
            <center>
              <table class="full-width centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px;margin: 0 auto">
                <tbody><tr>
                  <td class="title column" style="padding: 0;vertical-align: middle;text-align: left;font-family: Ubuntu,sans-serif;font-size: 10px;line-height: 16px;letter-spacing: 0.01em;text-decoration: none;width: 385px;color: gray">

                  </td>
                </tr>
              </tbody></table>
            </center>
          </td>
        </tr>
      </tbody></table>
      <div class="spacer" style="font-size: 1px;line-height: 20px;width: 100%">&nbsp;</div>
      <table class="header centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 100%;color: gray">
        <tbody><tr>
          <td style="padding: 0;vertical-align: middle">&nbsp;</td>
          <td class="logo emb-logo-padding-box" style="padding: 0;vertical-align: middle;mso-line-height-rule: at-least;width: 600px;padding-top: 12px;padding-bottom: 26px">
            <div class="logo-center" style="font-family: Avenir,sans-serif;color: #38434d;font-weight: bold;Margin-bottom: 0;text-align: center;font-size: 26px !important;line-height: 34px !important" align="center" id="emb-email-header">PAAET CBE System</div>
          </td>
          <td style="padding: 0;vertical-align: middle">&nbsp;</td>
        </tr>
      </tbody></table>

          <table class="one-col-bg" style="border-collapse: collapse;border-spacing: 0;width: 100%">
            <tbody><tr>
              <td style="padding: 0;vertical-align: middle" align="center">
                <table class="one-col centered column-bg" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;background-color: #fff;width: 600px;table-layout: fixed" emb-background-style>
                  <tbody><tr>
                    <td class="column" style="padding: 0;vertical-align: middle;text-align: left">
                      <div><div class="column-top" style="font-size: 40px;line-height: 40px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all">&nbsp;</div></div>
                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: middle;padding-left: 56px;padding-right: 56px;word-break: break-word;word-wrap: break-word">

            <h3 style='font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-size: 16px;line-height: 24px;font-family: "PT Serif",Georgia,serif;color: #788991;text-align: center'>Congratulations</h3><h1 style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 14px;font-size: 22px;line-height: 30px;font-family: Ubuntu,sans-serif;color: #3e4751;text-align: center">Your account has been approved</h1><p style='font-style: normal;font-weight: 400;Margin-bottom: 22px;Margin-top: 18px;font-size: 13px;line-height: 22px;font-family: "PT Serif",Georgia,serif;color: #7c7e7f;text-align: center'>You need to activate your account before you can access the system</p>

                            </td>
                          </tr>
                        </tbody></table>

                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: middle;padding-left: 56px;padding-right: 56px;word-break: break-word;word-wrap: break-word">

            <div class="btn" style="Margin-bottom: 22px;Margin-top: 0;text-align: center">
              <![if !mso]><a style='border-radius: 3px;display: inline-block;font-size: 14px;font-weight: 700;line-height: 24px;padding: 13px 35px 12px 35px;text-align: center;text-decoration: none !important;transition: opacity 0.2s ease-in;font-family: "PT Serif",Georgia,serif;background-color: #4eaacc;color: #fff' href="{{ baseUrl }}{{ urlFor('activate') }}?email={{ user.email }}&identifier={{ identifier }}">Activate My Account</a><![endif]>
            <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" href="http://google.com" style="width:208px" arcsize="7%" fillcolor="#4EAACC" stroke="f"><v:textbox style="mso-fit-shape-to-text:t" inset="0px,12px,0px,11px"><center style="font-size:14px;line-height:24px;color:#FFFFFF;font-family:Georgia,serif;font-weight:700;mso-line-height-rule:exactly;mso-text-raise:4px">Activate My Account</center></v:textbox></v:roundrect><![endif]--></div>

                            </td>
                          </tr>
                        </tbody></table>

                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: middle;padding-left: 56px;padding-right: 56px;word-break: break-word;word-wrap: break-word">

            <div class="divider" style="Margin-bottom: 22px;Margin-top: 0;font-size: 1px;line-height: 1px;width: 13px;background-color: #cbcbd7">&nbsp;</div>

                            </td>
                          </tr>
                        </tbody></table>

                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: middle;padding-left: 56px;padding-right: 56px;word-break: break-word;word-wrap: break-word">

            <h1 style="font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-size: 22px;line-height: 30px;font-family: Ubuntu,sans-serif;color: #3e4751;text-align: center">Your Login Information</h1><h2 style="font-style: normal;font-weight: bold;Margin-bottom: 0;Margin-top: 18px;font-size: 16px;line-height: 24px;font-family: Ubuntu,sans-serif;color: #3e4751">Username : &nbsp;</h2><h2 style="font-style: normal;font-weight: bold;Margin-bottom: 16px;Margin-top: 16px;font-size: 16px;line-height: 24px;font-family: Ubuntu,sans-serif;color: #3e4751">Password &nbsp;:&nbsp;</h2>

                            </td>
                          </tr>
                        </tbody></table>

                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">
                          <tbody><tr>
                            <td class="padded" style="padding: 0;vertical-align: middle;padding-left: 56px;padding-right: 56px;word-break: break-word;word-wrap: break-word">

            <p style='font-style: normal;font-weight: 400;Margin-bottom: 22px;Margin-top: 0;font-size: 13px;line-height: 22px;font-family: "PT Serif",Georgia,serif;color: #7c7e7f'>Kind regards,<br />
CBE IT Department</p>

                            </td>
                          </tr>
                        </tbody></table>

              <div class="image" style='font-size: 12px;mso-line-height-rule: at-least;font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-family: "PT Serif",Georgia,serif;color: #7c7e7f' align="center">
                <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 146px" src="../res/images/paaet_logo_mini.jpg" alt="" width="146" height="111" />
              </div>

                      <div class="column-bottom" style="font-size: 40px;line-height: 40px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all">&nbsp;</div>
                    </td>
                  </tr>
                </tbody></table>
              </td>
            </tr>
          </tbody></table>

          <div class="spacer" style="font-size: 1px;line-height: 20px;width: 100%">&nbsp;</div>

          <table class="two-col-bg" style="border-collapse: collapse;border-spacing: 0;width: 100%">
            <tbody><tr>
              <td style="padding: 0;vertical-align: middle" align="center">
                <table class="two-col centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px;table-layout: fixed">
                  <tbody><tr>
                    <td class="column" style="padding: 0;vertical-align: middle;text-align: left;width: 290px">
                      <table class="column-bg" style="border-collapse: collapse;border-spacing: 0;background-color: #fff" emb-background-style>
                        <tbody><tr>
                          <td style="padding: 0;vertical-align: middle">
                            <div><div class="column-top" style="font-size: 24px;line-height: 24px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all">&nbsp;</div></div>
                              <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">
                                <tbody><tr>
                                  <td class="padded" style="padding: 0;vertical-align: middle;padding-left: 24px;padding-right: 24px;word-break: break-word;word-wrap: break-word">

            <h2 style="font-style: normal;font-weight: bold;Margin-bottom: 16px;Margin-top: 0;font-size: 16px;line-height: 24px;font-family: Ubuntu,sans-serif;color: #3e4751">Frequently Asked Questions</h2>

                                  </td>
                                </tr>
                              </tbody></table>

                              <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">
                                <tbody><tr>
                                  <td class="padded" style="padding: 0;vertical-align: middle;padding-left: 24px;padding-right: 24px;word-break: break-word;word-wrap: break-word">

            <ul style='font-style: normal;font-weight: 400;padding-left: 0;Margin-bottom: 0;Margin-top: 0;font-size: 13px;line-height: 22px;font-family: "PT Serif",Georgia,serif;color: #7c7e7f;Margin-left: 15px'><li style="padding-left: 0;Margin-bottom: 0;Margin-top: 0"><a style="transition: opacity 0.2s ease-in;color: #4eaacc" href="http://google.com">What can I do next? &#187;</a></li><li style="padding-left: 0;Margin-bottom: 0;Margin-top: 10px"><a style="transition: opacity 0.2s ease-in;color: #4eaacc" href="http://google.com">Can I change my password?&#187;</a></li><li style="padding-left: 0;Margin-bottom: 0;Margin-top: 10px"><a style="transition: opacity 0.2s ease-in;color: #4eaacc" href="http://google.com">My account is not working! &#187;</a></li></ul>

                                  </td>
                                </tr>
                              </tbody></table>

                            <div class="column-bottom" style="font-size: 24px;line-height: 24px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all">&nbsp;</div>
                          </td>
                        </tr>
                      </tbody></table>
                    </td>
                    <td class="gutter" style="padding: 0;vertical-align: middle;width: 20px;font-size: 1px;line-height: 1px">&nbsp;</td>
                    <td class="column last" style="padding: 0;vertical-align: middle;text-align: left;width: 290px">
                      <table class="column-bg" style="border-collapse: collapse;border-spacing: 0;background-color: #fff" emb-background-style>
                        <tbody><tr>
                          <td style="padding: 0;vertical-align: middle">
                            <div><div class="column-top" style="font-size: 24px;line-height: 24px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all">&nbsp;</div></div>
                              <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">
                                <tbody><tr>
                                  <td class="padded" style="padding: 0;vertical-align: middle;padding-left: 24px;padding-right: 24px;word-break: break-word;word-wrap: break-word">

            <h2 style="font-style: normal;font-weight: bold;Margin-bottom: 16px;Margin-top: 0;font-size: 16px;line-height: 24px;font-family: Ubuntu,sans-serif;color: #3e4751">Contact</h2>

                                  </td>
                                </tr>
                              </tbody></table>

                              <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">
                                <tbody><tr>
                                  <td class="padded" style="padding: 0;vertical-align: middle;padding-left: 24px;padding-right: 24px;word-break: break-word;word-wrap: break-word">

            <p style='font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 0;font-size: 13px;line-height: 22px;font-family: "PT Serif",Georgia,serif;color: #7c7e7f'><strong style="font-weight: bold">General Helpdesk inquiries:</strong><br />
180-6611 Ext 1333</p><p style='font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 21px;font-size: 13px;line-height: 22px;font-family: "PT Serif",Georgia,serif;color: #7c7e7f'><strong style="font-weight: bold">PAAET System related inquiries:</strong><br />
Ext 7769</p><p style='font-style: normal;font-weight: 400;Margin-bottom: 0;Margin-top: 21px;font-size: 13px;line-height: 22px;font-family: "PT Serif",Georgia,serif;color: #7c7e7f'><strong style="font-weight: bold">Email inquiries:</strong><br />
<a style="transition: opacity 0.2s ease-in;color: #4eaacc" href="mailto:aj.alshuhab@paaet.edu.kw">aj.alshuhab@paaet.edu.kw</a></p>

                                  </td>
                                </tr>
                              </tbody></table>

                            <div class="column-bottom" style="font-size: 24px;line-height: 24px;transition-timing-function: cubic-bezier(0, 0, 0.2, 1);transition-duration: 150ms;transition-property: all">&nbsp;</div>
                          </td>
                        </tr>
                      </tbody></table>
                    </td>
                  </tr>
                </tbody></table>
              </td>
            </tr>
          </tbody></table>

          <div class="spacer" style="font-size: 1px;line-height: 60px;width: 100%">&nbsp;</div>

      <table class="footer" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;background-color: #ededf1">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top;text-align: left">&nbsp;</td>
          <td class="inner" style="padding: 0;vertical-align: top;text-align: left;padding-top: 40px;padding-bottom: 75px;width: 464px">
            <table style="border-collapse: collapse;border-spacing: 0;width: 100%">
              <tbody><tr>
                <td class="campaign" style="padding: 0;vertical-align: top;font-family: Ubuntu,sans-serif;text-align: left;font-size: 12px;line-height: 20px;color: gray">
                </td>
              </tr>
            </tbody></table>
          </td>
          <td style="padding: 0;vertical-align: top;text-align: left">&nbsp;</td>
        </tr>
      </tbody></table>
    </center>

</body>
{% endblock %}
