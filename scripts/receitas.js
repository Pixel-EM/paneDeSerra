import produtos from './produtos.js'
    
    export const australiano = () => {
        let ingredientes = [
            (produtos.farinhaTrigo.ppg * 210),
            (produtos.farinhaCenteio.ppg * 63),
            (produtos.farinhaIntegral.ppg * 8),
            (produtos.fibra.ppg * 2),
            (produtos.sal.ppg * 5),
            (produtos.melhorador.ppg * 3),
            (produtos.acucarMascavo.ppg * 11),
            (produtos.propionato.ppg * 1),
            (produtos.margarina.ppg * 24),
            (produtos.cacau.ppg * 8),
            (produtos.mel.ppg * 14),
            (produtos.fermento.ppg * 6)
        ]
        let ppu = 0;
        for (let i = 0; i < ingredientes.length; i++) {
            ppu = ppu + ingredientes[i]
        }

        return ppu.toFixed(2)
    }

    export const light = () => {
        let ingredientes = [
            (produtos.farinhaTrigo.ppg * 270),
            (produtos.fibra.ppg * 8),
            (produtos.sal.ppg * 5),
            (produtos.margarina.ppg * 16),
            (produtos.acucar.ppg * 6),
            (produtos.propionato.ppg * 1),
            (produtos.dinatec.ppg * 1),
            (produtos.fermento.ppg * 6)
        ]
        let ppu = 0;
        for (let i = 0; i < ingredientes.length; i++) {
            ppu = ppu + ingredientes[i]
        }

        return ppu.toFixed(2)
    }

    export const fibraLight = () => {
        let ingredientes = [
            (produtos.farinhaTrigo.ppg * 250),
            (produtos.fibra.ppg * 20),
            (produtos.germeTrigo.ppg * 5),
            (produtos.farinhaAmendoas.ppg * 3),
            (produtos.sal.ppg * 6),
            (produtos.margarina.ppg * 17),
            (produtos.melhorador.ppg * 3),
            (produtos.dinatec.ppg * 1),
            (produtos.propionato.ppg * 1),
            (produtos.acucarMascavo.ppg * 10),
            (produtos.fermento.ppg * 6),
        ]
        let ppu = 0;
        for (let i = 0; i < ingredientes.length; i++) {
            ppu = ppu + ingredientes[i]
        }

        return ppu.toFixed(2)
    }

    export const uvaPassaCanela = () => {
        let ingredientes = [
            (produtos.farinhaTrigo.ppg * 250),
            (produtos.fibra.ppg * 3),
            (produtos.canela.ppg * 5),
            (produtos.sal.ppg * 5),
            (produtos.margarina.ppg * 12),
            (produtos.melhorador.ppg * 3),
            (produtos.dinatec.ppg * 1),
            (produtos.propionato.ppg * 1),
            (produtos.acucar.ppg * 24),
            (produtos.leitePo.ppg * 8),
            (produtos.uvaPassa.ppg * 33)
        ]
        let ppu = 0;
        for (let i = 0; i < ingredientes.length; i++) {
            ppu = ppu + ingredientes[i]
        }

        return ppu.toFixed(2)
    }

    export const integral = () => {
        let ingredientes = [
            (produtos.farinhaTrigo.ppg * 225),
            (produtos.farinhaIntegral.ppg * 63),
            (produtos.sal.ppg * 5),
            (produtos.margarina.ppg * 17),
            (produtos.acucarMascavo.ppg * 10),
            (produtos.propionato.ppg * 1),
            (produtos.dinatec.ppg * 1),
            (produtos.fermento.ppg * 6),
            (produtos.melhorador.ppg * 3)
        ]
        let ppu = 0;
        for (let i = 0; i < ingredientes.length; i++) {
            ppu = ppu + ingredientes[i]
        }

        return ppu.toFixed(2)
    }

    export const aveia = () => {
        let ingredientes = [
            (produtos.farinhaTrigo.ppg * 270),
            (produtos.aveia.ppg * 5),
            (produtos.fibra.ppg * 2),
            (produtos.farinhaAveia.ppg * 2),
            (produtos.sal.ppg * 5),
            (produtos.margarina.ppg * 2),
            (produtos.dinatec.ppg * 1),
            (produtos.acucar.ppg * 10),
            (produtos.propionato.ppg * 1),
            (produtos.leitePo.ppg * 9),
            (produtos.fermento.ppg * 6)
        ]
        let ppu = 0;
        for (let i = 0; i < ingredientes.length; i++) {
            ppu = ppu + ingredientes[i]
        }

        return ppu.toFixed(2)
    }

    export const banana = () => {
        let ingredientes = [
            (produtos.farinhaTrigo.ppg * 250),
            (produtos.fibra.ppg * 3),
            (produtos.canela.ppg * 5),
            (produtos.sal.ppg * 5),
            (produtos.margarina.ppg * 13),
            (produtos.dinatec.ppg * 1),
            (produtos.propionato.ppg * 1),
            (produtos.banana.ppg * 35),
            (produtos.aveia.ppg * 5),
            (produtos.leitePo.ppg * 8),
            (produtos.melhorador.ppg * 3),
            (produtos.acucar.ppg * 3),
            (produtos.fermento.ppg * 3)
        ]
        let ppu = 0;
        for (let i = 0; i < ingredientes.length; i++) {
            ppu = ppu + ingredientes[i]
        }

        return ppu.toFixed(2)
    }

    export const linhaca = () => {
        let ingredientes = [
            (produtos.farinhaTrigo.ppg * 250),
            (produtos.farinhaCenteio.ppg * 12),
            (produtos.farinhaLinhaca.ppg * 11),
            (produtos.linhaca.ppg * 8),
            (produtos.sal.ppg * 6),
            (produtos.melhorador.ppg * 3),
            (produtos.margarina.ppg * 15),
            (produtos.acucar.ppg * 7),
            (produtos.propionato.ppg * 1),
            (produtos.fermento.ppg * 6)
        ]
        let ppu = 0;
        for (let i = 0; i < ingredientes.length; i++) {
            ppu = ppu + ingredientes[i]
        }

        return ppu.toFixed(2)
    }

    export const maca = () => {
        let ingredientes = [
            (produtos.farinhaTrigo.ppg * 250),
            (produtos.fibra.ppg * 3),
            (produtos.canela.ppg * 5),
            (produtos.sal.ppg * 5),
            (produtos.margarina.ppg * 13),
            (produtos.dinatec.ppg * 1),
            (produtos.propionato.ppg * 1),
            (produtos.maca.ppg * 45),
            (produtos.aveia.ppg * 5),
            (produtos.leitePo.ppg * 8),
            (produtos.melhorador.ppg * 3),
            (produtos.acucar.ppg * 25),
            (produtos.fermento.ppg * 6)
        ]
        let ppu = 0;
        for (let i = 0; i < ingredientes.length; i++) {
            ppu = ppu + ingredientes[i]
        }

        return ppu.toFixed(2)
    }

    export const ortomolecular = () => {
        let ingredientes = [
            (produtos.farinhaTrigo.ppg * 250),
            (produtos.farinhaIntegral.ppg * 25),
            (produtos.farinhaCenteio.ppg * 12),
            (produtos.soja.ppg * 12),
            (produtos.fibra.ppg * 6),
            (produtos.sal.ppg * 6),
            (produtos.margarina.ppg * 18),
            (produtos.acucar.ppg * 10),
            (produtos.propionato.ppg * 1),
            (produtos.dinatec.ppg * 1),
            (produtos.melhorador.ppg * 3),
            (produtos.fermento.ppg * 6)
        ]
        let ppu = 0;
        for (let i = 0; i < ingredientes.length; i++) {
            ppu = ppu + ingredientes[i]
        }

        return ppu.toFixed(2)
    }


export default {
    australiano,
    light,
    fibraLight,
    uvaPassaCanela,
    integral,
    aveia,
    banana,
    linhaca,
    maca,
    ortomolecular
}