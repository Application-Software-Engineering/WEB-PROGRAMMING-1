</div>

        <!-- Toggle Button -->
        <button class="btn btn-light toggle-btn shadow-sm collapsed" onclick="toggleSidebar()">
            <i class="bi bi-list fs-5"></i>
        </button>

        <!-- Sidebar -->
        <div class="sidebar collapsed" id="sidebar">
            <div class="sidebar-header p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">CRUD PHP</h5>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="nav flex-column mt-2">
                <a href="../crud/home.php" class="nav-link">
                    <i class="bi bi-house me-2"></i>
                    Data Mahasiswa
                </a>
                <a href="#" class="nav-link">
                    <i class="bi bi-house me-2"></i>
                    Data Dosen
                </a>
            </nav>

            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.querySelector('.toggle-btn');
            sidebar.classList.toggle('collapsed');
            toggleBtn.classList.toggle('collapsed');
        }
    </script>
</body>
</html>