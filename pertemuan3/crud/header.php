<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            transition: margin-right 0.3s;
        }

        .sidebar {
            width: 300px;
            background: #ffffff;
            border-left: 1px solid #e5e7eb;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            transition: transform 0.3s;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.05);
            overflow-y: auto;
        }

        .sidebar.collapsed {
            transform: translateX(-100%);
        }

        .toggle-btn {
            position: fixed;
            left: 310px;
            top: 20px;
            z-index: 1000;
            transition: right 0.3s;
        }

        .toggle-btn.collapsed {
            left: 20px;
        }

        .nav-link {
            color: #4b5563;
            padding: 0.75rem 1.25rem;
            transition: all 0.2s;
        }

        .nav-link:hover {
            background: #f3f4f6;
            color: #1f2937;
        }

        .nav-link.active {
            background: #e5e7eb;
            color: #1f2937;
            font-weight: 500;
        }

        .sidebar-header {
            border-bottom: 1px solid #e5e7eb;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
            }
            .toggle-btn {
                left: 20px;
            }
        }
        .alert {
            width: 300px;
            position: ;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Main Content -->
        <div class="main-content">