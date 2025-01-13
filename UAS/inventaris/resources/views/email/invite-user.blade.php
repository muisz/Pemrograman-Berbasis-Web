<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body
    style="
      font-family: Inter, Helvetica, Arial, sans-serif;
      color: #344054;
      background: #ffffff;
    "
  >
    <table
      style="
        max-width: 640px;
        margin: auto;
        width: 100%;
        border: 1px solid #e4e8eb;
        padding: 32px;
        border-radius: 10px;
      "
    >
      <thead>
        <tr>
          <td style="padding: 12px 24px">
            <div>
            </div>
          </td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="padding: 12px 24px">
          </td>
        </tr>
        <tr>
          <tr>
          <td style="padding: 16px 24px">
            Hi {{$name}},<br />
            Anda telah diundang sebagai admin, dengan rincian akun :
          </td>
        </tr>
        <tr>
          <td style="padding: 2px 24px">Email : <strong>{{$email}}</strong></td>
        </tr>
        <tr>
          <td style="padding: 2px 24px">Kata Sandi : <strong>{{$password}}</strong></td>
        </tr>
        <tr>
          <td style="padding: 16px 24px">
            Anda dapat mengakses website Inventaris pada link di bawah ini
          </td>
        </tr>
        <tr>
          <td style="padding: 12px 24px">
            <a
              href="http://inventaris.test/login"
              style="
                display: inline-block;
                padding: 10px 18px 10px 18px;
                gap: 8px;
                border-radius: 8px;
                box-shadow: 0px 1px 2px 0px #1018280d;
                border: 1px solid #c1272d;
                background: #c1272d;
                color: white;
                text-decoration: none;
              "
              target="_blank"
              rel="noopener noreferrer"
              >Masuk</a
            >
          </td>
        </tr>
        <tr>
          <td style="padding: 12px 24px">Terima kasih,</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td style="padding: 12px 24px; font-size: 14px">
            © 2025 Inventaris by Muis Studio
          </td>
        </tr>
      </tfoot>
    </table>
  </body>
</html>
