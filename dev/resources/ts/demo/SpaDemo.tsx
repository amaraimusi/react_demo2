import React, { useState, useEffect } from 'react';
import axios from '../cmn/Spa';

const SpaDemo: React.FC = () => {
  const [data, setData] = useState<any>(null);

console.log('A1');//■■■□□□■■■□□□
  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.post('demo/spa_demo', {
          key1: 'sampleDataValue'
        });
        setData(response.data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData();
  }, []);

  if (!data) return <p>Loading...</p>;

  return (
    <div>
      <h1>Data from Backend</h1>
      <pre>{JSON.stringify(data, null, 2)}</pre>
    </div>
  );
}

export default SpaDemo;