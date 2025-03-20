import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                dim_gray: { DEFAULT: '#767265', 100: '#181714', 200: '#2f2e28', 300: '#47453d', 400: '#5f5b51', 500: '#767265', 600: '#949081', 700: '#afaca1', 800: '#cac7c0', 900: '#e4e3e0' },
                bone: { DEFAULT: '#EBE3D4', 100: '#3d321c', 200: '#7b6439', 300: '#b3945a', 400: '#cfbc98', 500: '#ebe3d4', 600: '#f0e9dd', 700: '#f3efe6', 800: '#f7f4ee', 900: '#fbfaf7' },
                chamoisee: { DEFAULT: '#91725F', 100: '#1d1713', 200: '#3a2e26', 300: '#574439', 400: '#745b4c', 500: '#91725f', 600: '#aa8e7c', 700: '#bfaa9d', 800: '#d4c6be', 900: '#eae3de' },
                light_orange: { DEFAULT: '#F6D9B7', 100: '#4c2d09', 200: '#995a13', 300: '#e3871e', 400: '#edb06a', 500: '#f6d9b7', 600: '#f8e0c5', 700: '#fae8d3', 800: '#fbf0e2', 900: '#fdf7f0' },
                van_dyke: { DEFAULT: '#4C3B31', 100: '#100c0a', 200: '#1f1814', 300: '#2f241e', 400: '#3e3028', 500: '#4c3b31', 600: '#7c6050', 700: '#a58673', 800: '#c3aea2', 900: '#e1d7d0' },
                raisin_black: { DEFAULT: '#282322', 100: '#080707', 200: '#110e0e', 300: '#191615', 400: '#211d1c', 500: '#282322', 600: '#584d4b', 700: '#877673', 800: '#afa4a1', 900: '#d7d1d0' },
            },
        }
    }
}