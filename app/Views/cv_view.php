<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
            color: #007bff;
        }

        .header p {
            color: #555;
            margin: 5px 0;
        }

        .section-title {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            color: #007bff;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .content p {
            color: #555;
            line-height: 1.8;
        }

        .footer {
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            border-top: 2px solid #e0e0e0;
            color: #777;
        }

        .skills ul {
            list-style-type: none;
            padding: 0;
        }

        .skills li {
            background-color: #e9f5ff;
            color: #007bff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .skills li:hover {
            background-color: #cfe9ff;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php if (isset($cv)) : ?>
            <div class="header">
                <h1><?= esc($cv['name']) ?></h1>
                <p><?= esc($cv['email']) ?> | <?= esc($cv['phone']) ?></p>
                <p><?= esc($cv['address']) ?></p>
            </div>

            <div class="content">
                <h2 class="section-title">Experience</h2>
                <p><?= nl2br(esc($cv['experience'])) ?></p>
            </div>

            <div class="content">
                <h2 class="section-title">Education</h2>
                <p><?= nl2br(esc($cv['education'])) ?></p>
            </div>

            <div class="content skills">
                <h2 class="section-title">Skills</h2>
                <ul class="row">
                    <?php foreach (explode(',', $cv['skills']) as $skill) : ?>
                        <li class="col-md-4"><?= esc(trim($skill)) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php else : ?>
            <p>No CV data found.</p>
        <?php endif; ?>

        <div class="footer">
            <p>&copy; <?= date('Y') ?> My CV. All rights reserved.</p>
        </div>
    </div>
</body>

</html>