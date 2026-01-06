<?php 
session_start();

?>
<style>
</style>
<!DOCTYPE html>
<title>My Example</title>

<!-- Place the following CSS in your <head> or stylesheet -->
<style>
/* This is an optional body style to provide a background for the page */
body {
    background-color: #f3f4f6;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;
}

/* === Grid Container for the Cards === */
.cards-grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 1.5rem;
    padding: 1.5rem;
}

/* === Stat Card Styles === */
.stat-card {
    --stat-card-radius: 12px;
    --stat-card-shadow: 0 4px 10px rgba(0,0,0,0.06);
    --positive-color: #16a34a; /* Green */
    --negative-color: #dc2626; /* Red */
    
    background-color: #ffffff;
    border-radius: var(--stat-card-radius);
    box-shadow: var(--stat-card-shadow);
    padding: 1.5rem;
}

.stat-card-title {
    font-size: 1rem;
    font-weight: 500;
    color: #6b7280;
    margin: 0 0 0.5rem;
}

.stat-card-main-figure {
    font-size: 2.25rem;
    font-weight: 700;
    color: #111827;
    margin: 0 0 1rem;
    line-height: 1.1;
}

.stat-card-comparison {
    display: flex;
    align-items: center;
    gap: 0.35rem;
    font-size: 0.9rem;
    font-weight: 500;
}

.stat-card-comparison svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
}

/* Modifier classes for trend colors */
.stat-card-comparison.is-positive {
    color: var(--positive-color);
}
.stat-card-comparison.is-negative {
    color: var(--negative-color);
}

</style>

<!-- Place the following HTML in your <body> -->
<div class="cards-grid-container">

    <!-- Card 1: Positive Trend -->
    <div class="stat-card">
        <h3 class="stat-card-title">Total Revenue</h3>
        <p class="stat-card-main-figure">$405,091.00</p>
        <div class="stat-card-comparison is-positive">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.28 9.64a.75.75 0 01-1.06-1.06l5.25-5.25a.75.75 0 011.06 0l5.25 5.25a.75.75 0 11-1.06 1.06L10.75 5.612V16.25a.75.75 0 01-.75.75z" clip-rule="evenodd"/></svg>
            <span>+4.7% from last month</span>
        </div>
    </div>

    <!-- Card 2: Positive Trend -->
     <div class="stat-card">
        <h3 class="stat-card-title">New Subscribers</h3>
        <p class="stat-card-main-figure">+1,204</p>
        <div class="stat-card-comparison is-positive">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.28 9.64a.75.75 0 01-1.06-1.06l5.25-5.25a.75.75 0 011.06 0l5.25 5.25a.75.75 0 11-1.06 1.06L10.75 5.612V16.25a.75.75 0 01-.75.75z" clip-rule="evenodd"/></svg>
            <span>+12.1% from last month</span>
        </div>
    </div>
    
    <!-- Card 3: Negative Trend -->
    <div class="stat-card">
        <h3 class="stat-card-title">Avg. Order Value</h3>
        <p class="stat-card-main-figure">$84.50</p>
        <div class="stat-card-comparison is-negative">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.97-3.969a.75.75 0 111.06 1.06l-5.25 5.25a.75.75 0 01-1.06 0l-5.25-5.25a.75.75 0 111.06-1.06l3.97 3.969V3.75A.75.75 0 0110 3z" clip-rule="evenodd"/></svg>
            <span>-2.3% from last month</span>
        </div>
    </div>
    
    <!-- Card 4: Neutral Trend (Optional - no color class) -->
     <div class="stat-card">
        <h3 class="stat-card-title">Active Users</h3>
        <p class="stat-card-main-figure">21,830</p>
        <div class="stat-card-comparison">
            <!-- A different icon for a neutral metric -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M19.84 10.06a.75.75 0 0 0 0-1.06l-4.29-4.29a.75.75 0 0 0-1.06 1.06l2.72 2.72H2.79l2.72-2.72a.75.75 0 0 0-1.06-1.06L.16 8.99a.75.75 0 0 0 0 1.06l4.29 4.29a.75.75 0 1 0 1.06-1.06l-2.72-2.72h14.42l-2.72 2.72a.75.75 0 0 0 1.06 1.06l4.29-4.29z" clip-rule="evenodd"></path>
            </svg>
            <span>Updated just now</span>
        </div>
    </div>
</div>