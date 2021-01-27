document.write(`

    <table>
        <tr><th colspan="3">SQUARES AND CUBES</th></tr>
        <tr>
            <td>Number</td>
            <td>Squares</td>
            <td>Cubes</td>
        </tr>
`);

for (let i=1; i<=10; i++){
    document.write(`
        <tr>
            <td>${i}</td>
            <td>${i*i}</td>
            <td>${i*i*i}</td>
        </tr>
    `);
}

document.table(`</table>`);