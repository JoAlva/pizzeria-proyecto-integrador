import http from 'k6/http';
import { sleep, check } from 'k6';

export const options = {
  stages: [
  { duration: '30s', target: 50 },
  { duration: '1m', target: 100 },
  { duration: '1m', target: 200 },
  { duration: '1m30s', target: 200 },
  { duration: '30s', target: 0 },
],

  thresholds: {
    http_req_duration: ['p(95)<500'],
    http_req_failed: ['rate<0.01'],
  },
};

const BASE_URL = 'http://rooster.local/api';

export default function () {

  // LOGIN
  const loginRes = http.post(
    `${BASE_URL}/login`,
    JSON.stringify({
      correo: 'cliente@rooster.com',
      contrasena: 'cliente123',
    }),
    {
      headers: {
        'Content-Type': 'application/json',
      },
      timeout: '60s',
    }
  );

  check(loginRes, {
    'login exitoso': (r) => r.status === 200,
    'login menor 500ms': (r) => r.timings.duration < 500,
  });

  sleep(1);

  // PRODUCTOS
  const productosRes = http.get(`${BASE_URL}/productos`, {
    timeout: '60s',
  });

  check(productosRes, {
    'productos cargaron': (r) => r.status === 200,
    'productos menor 500ms': (r) => r.timings.duration < 500,
  });

  sleep(1);

  // CATEGORÍAS
  const categoriasRes = http.get(`${BASE_URL}/categorias`, {
    timeout: '60s',
  });

  check(categoriasRes, {
    'categorias cargaron': (r) => r.status === 200,
    'categorias menor 500ms': (r) => r.timings.duration < 500,
  });

  sleep(1);

  // PEDIDOS
  const pedidosRes = http.get(`${BASE_URL}/pedidos`, {
    timeout: '60s',
  });

  check(pedidosRes, {
    'pedidos cargaron': (r) => r.status === 200,
    'pedidos menor 500ms': (r) => r.timings.duration < 500,
  });

  sleep(1);


// CREAR PEDIDO (flujo real de escritura)
  const clientesValidos = [1, 2, 3, 4, 5];
  const idClienteAleatorio = clientesValidos[Math.floor(Math.random() * clientesValidos.length)];

  const nuevoPedidoRes = http.post(
    `${BASE_URL}/pedidos`,
    JSON.stringify({
      id_cliente: idClienteAleatorio,
      total: (Math.random() * 20000 + 5000).toFixed(2),
      estado: 'recibido',
    }),
    {
      headers: { 'Content-Type': 'application/json' },
      timeout: '60s',
    }
  );

  check(nuevoPedidoRes, {
    'pedido creado': (r) => r.status === 201,
    'pedido creado menor 500ms': (r) => r.timings.duration < 500,
  });

  sleep(1);


}