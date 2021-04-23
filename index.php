<?php
    session_start();
    $_SESSION["test"] = "session test";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/code_whisper/common/head.php"; ?>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/code_whisper/common/header.php"; ?>
    </header>

    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/code_whisper/common/nav.php"; ?>
    </nav>

    <main>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/code_whisper/common/main.php"; ?>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/code_whisper/common/footer.php"; ?>
    </footer>

</body>

</html>