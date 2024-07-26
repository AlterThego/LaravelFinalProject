import './bootstrap';
import Alpine from 'alpinejs';
import 'flowbite';

import { themeChange } from 'theme-change'
themeChange()

window.Alpine = Alpine;

Alpine.start();
