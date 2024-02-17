<!DOCTYPE html>
<html>
<head>
    <title>List Server</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Daftar Server</h2>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white">
                    VMess Server
                </div>
                <div class="card-body">
                    <ul>
                        <li>HTTP PORT : 80 8080 8880 2052 2082 2086 2095</li>
                        <li>HTTPS PORT : 443 2053 2083 2087 2096 8443</li>
                        <li>PATH : /vmess-ws</li>
                    </ul>
                    <textarea rows="4" cols="50" style="width: 100%;"
                    placeholder="Masukkan server URL VMess di sini"
                    readonly><?php echo shell_exec('cat /etc/xray/vmess.txt');
                    ?></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    VLESS Server
                </div>
                <div class="card-body">
                    <ul>
                        <li>HTTP PORT : 80 8080 8880 2052 2082 2086 2095</li>
                        <li>HTTPS PORT : 443 2053 2083 2087 2096 8443</li>
                        <li>PATH : /vless-ws</li>
                    </ul>
                    <textarea rows="4" cols="50" style="width: 100%;"
                    placeholder="Masukkan server URL VLESS di sini"
                    readonly><?php echo shell_exec('cat /etc/xray/vless.txt'); ?></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Shadowsocks Server
                </div>
                <div class="card-body">
                    <ul>
                        <li>HTTP PORT : 80 8080 8880 2052 2082 2086 2095</li>
                        <li>HTTPS PORT : 443 2053 2083 2087 2096 8443</li>
                        <li>PATH : /ss-ws</li>
                        <li>CLIENT : eV2ray</li>
                    </ul>
                    <textarea rows="4" cols="50" style="width: 100%;"
                    placeholder="Masukkan server URL Shadowsocks di sini"
                    readonly><?php echo shell_exec('cat /etc/xray/ss.txt'); ?></textarea></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    Trojan Server
                </div>
                <div class="card-body">
                    <ul>
                        <li>HTTP PORT : 80 8080 8880 2052 2082 2086 2095</li>
                        <li>HTTPS PORT : 443 2053 2083 2087 2096 8443</li>
                        <li>ServiceName : trojan-grpc</li>
                    </ul>
                    <textarea rows="4" cols="50" style="width: 100%;"
                    placeholder="Masukkan server URL Trojan di sini"
                    readonly><?php echo shell_exec('cat /etc/xray/trojan.txt');
                    ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
