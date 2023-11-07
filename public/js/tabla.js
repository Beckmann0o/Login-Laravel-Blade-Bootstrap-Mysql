const dataTableElement = document.getElementById('tablatareas');
const dataTable = $(dataTableElement).DataTable({
    data: [],
    columns: [
        { data: 'id' },
        { data: 'nombre' },
        { data: 'estado', render: function(data) { return status(data); } },
        {
            data: null,
            render: function (data) {
                return '<div>' +
                '<button id="btn_estado" class="btn btn-success mx-1" taskID=' + data.id + '>Estado</button>' +
                '<button id="btn_eliminar" class="btn btn-danger mx-1" taskID=' + data.id + '>Eliminar</button>' +
                '</div>';
            },
        }
    ],
});

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
         if (data.hasOwnProperty('tasks') && Array.isArray(data.tasks)) {
                dataTable.clear();
                data.tasks.forEach(rowData => {
                    dataTable.row.add(rowData);
                });
                dataTable.draw();
            } else {
                console.error('Data format is incorrect:', data);
            }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Hubo un error al traer las tareas');
    });
}

function status(num) {
    if (num === 1) return "Pendiente";
    if (num === 2) return "Finalizado";
}

document.addEventListener('DOMContentLoaded', function() {
    loadTasks();

    const taskForm = document.querySelector('.row.row-cols-lg-auto.g-3.justify-content-center.align-items-center.mb-4.pb-2');

    taskForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const nuevaTareaInput = document.getElementById('form1');
        const nuevaTarea = nuevaTareaInput.value;

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
            nuevaTareaInput.value = '';
            loadTasks();
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un error al crear la tarea');
        });
    });

    $(dataTableElement).on('click', '#btn_estado', function () {
    const row = $(this).closest('tr');
    const data = dataTable.row(row).data();
    const tareaId = data.id;
    const newEstado = data.estado === 1 ? 2 : 1;

    fetch('/vista/updatetask',{
        method: 'PUT', 
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ id: tareaId, estado: newEstado })
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        alert('Estado de la tarea actualizado correctamente');
        loadTasks();
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error al actualizar el estado de la tarea');
    });
});

    $(dataTableElement).on('click', '#btn_eliminar', function () {
        const row = $(this).closest('tr');
        const data = dataTable.row(row).data();
        const tareaId = data.id;

        fetch('/vista/deletetask/' + tareaId, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ id: tareaId })
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            alert('Tarea borrada correctamente');
            dataTable.row(row).remove().draw();
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error al borrar la tarea');
        });
    });
});
