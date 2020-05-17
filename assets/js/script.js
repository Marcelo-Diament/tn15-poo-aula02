window.onload = () => {

    $('.nav-link').each( function(index, element) {
        element.href == window.location
        ? $('.nav-item')[index].classList.add('active')
        : $('.nav-item')[index].classList.remove('active');
    });
    
    const poligono = $('#poligono'),
        formPoligono = $('#calcularPoligonoForm');
    poligono.on('change', function() {
        $('.dinamic-field').remove();

        switch($(this).val()) {
            case 'Círculo':
                formPoligono.append(`
                    <div class="form-group-row mb-3 dinamic-field">
                        <label for="raio">Raio</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="raio" name="raio" min="1" max="100" required>
                            <div class="input-group-append">
                                <div class="input-group-text">cm</div>
                            </div>
                        </div>
                    </div>
                `);
            break;
            case 'Losango':
                formPoligono.append(`
                    <div class="form-group-row mb-3 dinamic-field">
                        <label for="diagonal1">Diagonal 1</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="diagonal1" name="diagonal1" min="1" max="100" required>
                            <div class="input-group-append">
                                <div class="input-group-text">cm</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-row mb-3 dinamic-field">
                        <label for="diagonal2">Diagonal 2</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="diagonal2" name="diagonal2" min="1" max="100" required>
                            <div class="input-group-append">
                                <div class="input-group-text">cm</div>
                            </div>
                        </div>
                    </div>
                `);
            break;
            case 'Retângulo':
                formPoligono.append(`
                    <div class="form-group-row mb-3 dinamic-field">
                        <label for="lado1">Lado 1</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="lado1" name="lado1" min="1" max="100" required>
                            <div class="input-group-append">
                                <div class="input-group-text">cm</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-row mb-3 dinamic-field">
                        <label for="lado2">Lado 2</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="lado2" name="lado2" min="1" max="100" required>
                            <div class="input-group-append">
                                <div class="input-group-text">cm</div>
                            </div>
                        </div>
                    </div>
                `);
            break;
            case 'Triângulo':
                formPoligono.append(`
                    <div class="form-group-row mb-3 dinamic-field">
                        <label for="lado1">Lado 1</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="lado1" name="lado1" min="1" max="100" required>
                            <div class="input-group-append">
                                <div class="input-group-text">cm</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-row mb-3 dinamic-field">
                        <label for="lado2">Lado 2</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="lado2" name="lado2" min="1" max="100" required>
                            <div class="input-group-append">
                                <div class="input-group-text">cm</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-row mb-3 dinamic-field">
                        <label for="lado3">Lado 3</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="lado3" name="lado3" min="1" max="100" required>
                            <div class="input-group-append">
                                <div class="input-group-text">cm</div>
                            </div>
                        </div>
                    </div>
                `);
            break;
        }
        formPoligono.append(`<button type="submit" class="btn btn-dark d-block mt-4 ml-auto dinamic-field">Calcular</button>`);
        
    })
};