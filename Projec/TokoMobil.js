function createTable(data) {
    const table = document.createElement('table');
    const headerRow = table.insertRow();
  
    for (const key in data[0]) {
      const th = document.createElement('th');
      th.textContent = key;
      headerRow.appendChild(th);
    }
    data.forEach(row => {
      const newRow = table.insertRow();
      for (const key in row) {
        const cell = newRow.insertCell();
        cell.textContent = row[key];
      }
    });
  
    document.getElementById('myTable').appendChild(table);
  }
  const myData = [
    { id: 1, harga: 5000000, jumlah: 1 },
    { id: 2, harga: 1000000, jumlah: 1 }
  ];
  
  createTable(myData);