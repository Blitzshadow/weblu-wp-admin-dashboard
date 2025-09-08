// Główny plik JavaScript dla panelu administracyjnego
document.addEventListener('DOMContentLoaded', function() {
    // Inicjalizacja dashboardu
    initDashboard();

    // Funkcja do inicjalizacji dashboardu
    function initDashboard() {
        // Logika do załadowania modułów
        loadModules();
    }

    // Funkcja do ładowania modułów
    function loadModules() {
        // Przykład ładowania modułu statystyk
        import('./modules/stats.js')
            .then(module => {
                module.initStats();
            })
            .catch(err => console.error('Error loading module:', err));
        
        // Można dodać więcej modułów w przyszłości
    }
});