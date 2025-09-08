<div class="grid-wrapper">
    <div class="grid-container">
        <?php
        // Placeholder for dynamic module cards
        // Each module card will be injected here
        ?>
    </div>
</div>

<style>
.grid-wrapper {
    display: flex;
    justify-content: center;
    padding: 20px;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    width: 100%;
}
</style>