document.addEventListener('DOMContentLoaded', function() {
    // Initialize the DataTable without specifying columns
    const dataTable = $(dataTableElement).DataTable();

    // Function to load all tasks
    function loadTasks() {
        fetch("/vista/task", {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);

            if (Array.isArray(data)) {
                // Clear the existing table data
                dataTable.clear();

                // Add new data
                data.forEach(rowData => {
                    dataTable.row.add(rowData);
                });

                // Redraw the table
                dataTable.draw();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un error al traer las tareas');
        });
    }

    loadTasks(); // Load tasks and initialize DataTable on initial page load

    const taskForm = document.querySelector('.row.row-cols-lg-auto.g-3.justify-content-center.align-items-center.mb-4.pb-2');
  
    taskForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent page reload
  
        const nuevaTareaInput = document.getElementById('form1');
        const nuevaTarea = nuevaTareaInput.value; // Get the value from the input field

        fetch('/vista/createtask', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ nombre: nuevaTarea })
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            alert('Tarea creada correctamente');
            nuevaTareaInput.value = ''; // Clear the input field after adding a task
            loadTasks(); // Reload the DataTable after adding a new task
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un error al crear la tarea');
        });
    });
});
