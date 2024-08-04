let temperatureChart = null;
let rhChart = null;
let rainfallChart = null;


function getTemp() {
    fetch("/getTemp") // Adjust the URL based on your route
        .then((response) => response.json())
        .then((data) => {
            // console.log("Temperature Data:", data);

            // Extract years and temperatures
            const years = data.data.map((item) => item.year);
            const temperatures = data.data.map((item) => item.temperature);

            // Get the context of the canvas element for temperature
            const ctx = document
                .getElementById("temperatureChart")
                .getContext("2d");

            // Create a new chart if it doesn't exist
            if (!temperatureChart) {
                temperatureChart = new Chart(ctx, {
                    type: "line",
                    data: {
                        labels: years,
                        datasets: [
                            {
                                label: "Average Temperature",
                                data: temperatures,
                                borderColor: "rgba(75, 192, 192, 1)",
                                backgroundColor: "rgba(75, 192, 192, 0.2)",
                                borderWidth: 2,
                                tension: 0.3, // Add smooth curves to the line
                            },
                        ],
                    },
                    options: {
                        responsive: true,
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: "Year",
                                },
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: "Temperature (°C)",
                                },
                                min: 25, // Set the minimum value of the y-axis
                                max: 28, // Set the maximum value of the y-axis
                                ticks: {
                                    callback: function (value) {
                                        return value + "°C"; // Append °C to y-axis labels
                                    },
                                },
                            },
                        },
                        plugins: {
                            legend: {
                                display: true,
                                position: "top",
                            },
                            tooltip: {
                                callbacks: {
                                    label: function (tooltipItem) {
                                        return `Temperature: ${tooltipItem.raw}°C`; // Customize tooltip
                                    },
                                },
                            },
                        },
                    },
                });
            } else {
                // Update the existing chart with new data
                temperatureChart.data.labels = years;
                temperatureChart.data.datasets[0].data = temperatures;
                temperatureChart.update();
            }
        })
        .catch((error) => {
            console.error("Error fetching data:", error);
        });
}

function getRh() {
    fetch("/getRh") // Adjust the URL based on your route
        .then((response) => response.json())
        .then((data) => {
            // console.log("RH Data:", data);

            // Extract years and RH values
            const years = data.data.map((item) => item.year);
            const rhValues = data.data.map((item) => item.rh);

            // Get the context of the canvas element for RH
            const ctx = document.getElementById("rhChart").getContext("2d");

            // Create a new chart if it doesn't exist
            if (!rhChart) {
                rhChart = new Chart(ctx, {
                    type: "line",
                    data: {
                        labels: years,
                        datasets: [
                            {
                                label: "Average RH",
                                data: rhValues,
                                borderColor: "rgba(153, 102, 255, 1)",
                                backgroundColor: "rgba(153, 102, 255, 0.2)",
                                borderWidth: 2,
                                tension: 0.3, // Add smooth curves to the line
                            },
                        ],
                    },
                    options: {
                        responsive: true,
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: "Year",
                                },
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: "Relative Humidity (%)",
                                },
                                min: 70, // Set the minimum value of the y-axis
                                max: 90, // Set the maximum value of the y-axis
                                ticks: {
                                    callback: function (value) {
                                        return value + "%"; // Append % to y-axis labels
                                    },
                                },
                            },
                        },
                        plugins: {
                            legend: {
                                display: true,
                                position: "top",
                            },
                            tooltip: {
                                callbacks: {
                                    label: function (tooltipItem) {
                                        return `RH: ${tooltipItem.raw}%`; // Customize tooltip
                                    },
                                },
                            },
                        },
                    },
                });
            } else {
                // Update the existing chart with new data
                rhChart.data.labels = years;
                rhChart.data.datasets[0].data = rhValues;
                rhChart.update();
            }
        })
        .catch((error) => {
            console.error("Error fetching data:", error);
        });
}

function getRainfall() {
    fetch("/getRainfall") // Adjust the URL based on your route
        .then((response) => response.json())
        .then((data) => {
            // console.log("Rainfall Data:", data);

            // Extract years and rainfall values
            const years = data.data.map((item) => item.year);
            const rainfallValues = data.data.map((item) => item.precipitation);

            // console.log("Years:", years);
            // console.log("Rainfall Values:", rainfallValues);

            // Get the context of the canvas element for rainfall
            const ctx = document
                .getElementById("rainfallChart")
                .getContext("2d");

            // Create a new chart if it doesn't exist
            if (!rainfallChart) {
                rainfallChart = new Chart(ctx, {
                    type: "line",
                    data: {
                        labels: years,
                        datasets: [
                            {
                                label: "Average Rainfall",
                                data: rainfallValues,
                                borderColor: "rgba(255, 159, 64, 1)",
                                backgroundColor: "rgba(255, 159, 64, 0.2)",
                                borderWidth: 2,
                                tension: 0.3, // Add smooth curves to the line
                            },
                        ],
                    },
                    options: {
                        responsive: true,
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: "Year",
                                },
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: "Rainfall (mm)",
                                },
                                min: 0, // Set the minimum value of the y-axis
                                ticks: {
                                    callback: function (value) {
                                        return value + " mm"; // Append mm to y-axis labels
                                    },
                                },
                            },
                        },
                        plugins: {
                            legend: {
                                display: true,
                                position: "top",
                            },
                            tooltip: {
                                callbacks: {
                                    label: function (tooltipItem) {
                                        return `Rainfall: ${tooltipItem.raw} mm`; // Customize tooltip
                                    },
                                },
                            },
                        },
                    },
                });
            } else {
                // Update the existing chart with new data
                rainfallChart.data.labels = years;
                rainfallChart.data.datasets[0].data = rainfallValues;
                rainfallChart.update();
            }
        })
        .catch((error) => {
            console.error("Error fetching data:", error);
        });
}
