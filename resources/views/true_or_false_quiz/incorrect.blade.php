<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>正解ページ</title>
    <style>
        body {
            background-color: #3498db; /* ページの背景色を設定 */
            color: #fff; /* テキストの色を白に設定 */
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 100px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            animation: fadeIn 1s; /* フェードインアニメーションを追加 */
        }

        p {
            font-size: 24px;
            margin-bottom: 30px;
            animation: slideIn 1s; /* スライドインアニメーションを追加 */
        }

        button {
            background-color: #2ecc71; /* ボタンの背景色を緑に設定 */
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s; /* ボタンの背景色にホバー効果を追加 */
        }

        button:hover {
            background-color: #27ae60; /* ホバー時の背景色を変更 */
        }

        /* アニメーションキーフレームを定義 */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div>
        <h1>不正解です！</h1>
        <button onclick="history.back()">再挑戦</button>
    </div>
</body>
</html>
