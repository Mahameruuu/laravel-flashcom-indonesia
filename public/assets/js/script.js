const menuToggle = document.getElementById('menuToggle');
const sidebar = document.querySelector('.sidebar');
const dashboardContainer = document.querySelector('.dashboard-container');

menuToggle.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
    dashboardContainer.classList.toggle('expanded');
});
document.querySelector('.menu-toggle').addEventListener('click', function() {
    document.querySelector('.sidebar').classList.toggle('active');
});
