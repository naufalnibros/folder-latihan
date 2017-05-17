using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace array_rata
{
    class Program
    {
        static void Main(string[] args)
        {
            //menghitung rata rata

            int N = int.Parse(Console.ReadLine());
            int[] nilai = new int[N];

            int jumlah = 0;

            for (int i = 0; i < N; i++)
                nilai[i] = int.Parse(Console.ReadLine());

            for (int i = 0; i < N; i++)
                jumlah += nilai[i];
            double rata = (double)jumlah / (double)N;

            Console.WriteLine("hasil : "+rata);
           
        }
    }
}
