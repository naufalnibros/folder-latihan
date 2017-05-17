using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SubString
{
    class Program
    {
        static void Main(string[] args)
        {
            //Mengambil beberapa karakter pada posisi tertenty dari sebuah string
            string nama = "Aku Sayang Pean";
            int N = nama.Length;
            string[] huruf = new string[N];
            for (int i = 0; i < N; i++)
                huruf[i] = nama.Substring(i, 1);
            for (int i = 0; i < N; i++)
                Console.WriteLine(huruf[i]);
        }
    }
}
