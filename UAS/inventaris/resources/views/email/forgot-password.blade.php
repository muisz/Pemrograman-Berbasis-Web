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
          <td style="padding: 12px 24px">
            Hi {{$name}}, <br /><br />
            Kami telah menerima permintaan untuk mengatur ulang kata sandi Anda.
            Jika Anda tidak mengajukan permintaan, abaikan saja pesan ini.
            <br /><br />Jika tidak, Anda dapat mengatur ulang kata sandi Anda.
          </td>
        </tr>
        <tr>
          <td style="padding: 12px 24px">
            <a
              href="{{$url}}"
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
              >Ubah kata sandi</a
            >
          </td>
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
