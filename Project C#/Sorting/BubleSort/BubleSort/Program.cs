using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BubleSort
{
    class Program
    {
        static void Main(string[] args)
        {
            // Proses isi data
            Console.Write("Masukkan berapa Angka yg di sorting : ");
            int N = int.Parse(Console.ReadLine());
            int[] data = new int[N];
            for (int i = 0; i < N; i++)
            {
                data[i] = int.Parse(Console.ReadLine());
            }
            // Proses Bubble Sort 
            for (int i = 0; i < N - 1; i++)
            {
                for (int j = 0; j < N - 1; j++)
                {
                    if (data[j] > data[j + 1])
                    {
                        int temp = data[j];
                        data[j] = data[j + 1];
                        data[j + 1] = temp; 
                    } 
                } 
            }
            Console.WriteLine("# Hasil Sorting #");
            for (int i = 0; i < N; i++)
                Console.WriteLine(data[i]);
            Console.ReadKey();
        }
    }
}
