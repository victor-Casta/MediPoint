<script>
    import pictureForm from "../../public/assets/img-4.png"
    let selectedEps = '';
    let selectedService = '';
    const handleSubmit = (event) => {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del formulario
        // Aquí puedes realizar acciones con los valores seleccionados (selectedEps, selectedService)
        console.log('EPS seleccionada:', selectedEps);
        console.log('Servicio seleccionado:', selectedService);
    };
</script>

<div class="epsSelection">
    <div class="form-container">
        <form on:submit={handleSubmit}>
            <label for="eps">Selecciona tu eps: </label><br />
            <select id="eps" name="eps" bind:value={selectedEps}>
                <option value="sura">Sura</option>
                <option value="comfama">Comfama</option>
                <option value="sanitas">Sanitas</option>
                <option value="neweps">Nueva Eps</option>
            </select><br /><br />
            <label for="servicio">Selecciona tu servicio: </label><br />
            <select id="servicio" name="servicio" bind:value={selectedService}>
                <option value="pediatria">pediátricas</option>
                <option value="odontologia">odontológicas </option>
                <option value="adultos">adultos</option>
        </select><br /><br />
        <button type="submit">Enviar</button>
        </form>
    </div>
    <div class="picture-container">
        <img src={pictureForm.src} alt="selection eps">
    </div>
</div>

<style>
    .epsSelection {
        max-width: 1024px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
        justify-items: center;
        background-color: #39AF97;
        border-radius: 20px;
    }
    .epsSelection .form-container {
        width: 100%;
        padding: 0 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .epsSelection .picture-container {
        width: 100%;
        height: 100%;
        padding: 20px;
        border-radius: 0 20px 20px 0;
        background-color: #BF8092;
    }
    .epsSelection .form-container label {
        font-size: 1.3rem;
        font-weight: 700;
        color: #FFF;
    }
    .epsSelection .form-container select {
        margin-top: 5px;
        height: 35px;
        width: 100%;
        padding: 0 10px;
        outline: none;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        background-color: #ece2e5;
        font-family: 'nunito', sans-serif;
        font-size: 16px;
    }

    .epsSelection .form-container button {
        margin-top: 20px;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
        background-image: linear-gradient(-180deg,#BF8092 , #a84864);
        text-transform: uppercase;
        letter-spacing: 4px;
        font-size: 1rem;
        font-weight: 900;
        font-family: 'Nunito' sans-serif;
        color: #fff;
        outline: none;
    }

    @media (max-width: 768px) {
        .epsSelection {
            grid-template-columns: 1fr;
            grid-column: 1fr 1fr;
        }
        .epsSelection .picture-container {
            margin: 20px 0 0 0;
        }
        .epsSelection .form-container {
            padding: 20px;
        }
    }
</style>
